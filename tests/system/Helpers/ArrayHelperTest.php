<?php namespace CodeIgniter\Helpers;

class ArrayHelperTest extends \CodeIgniter\Test\CIUnitTestCase
{
	protected function setUp(): void
	{
		parent::setUp();
		helper('array');
	}

	public function testArrayDotSimple()
	{
		$data = [
			'foo' => [
				'bar' => 23,
			],
		];

		$this->assertEquals(23, dot_array_search('foo.bar', $data));
	}

	public function testArrayDotTooManyLevels()
	{
		$data = [
			'foo' => [
				'bar' => 23,
			],
		];

		$this->assertEquals(23, dot_array_search('foo.bar.baz', $data));
	}

	public function testArrayDotReturnNullEmptyArray()
	{
		$data = [];

		$this->assertNull(dot_array_search('foo.bar', $data));
	}

	public function testArrayDotReturnNullMissingValue()
	{
		$data = [
			'foo' => [
				'bar' => 23,
			],
		];

		$this->assertNull(dot_array_search('foo.baz', $data));
	}

	public function testArrayDotReturnNullEmptyIndex()
	{
		$data = [
			'foo' => [
				'bar' => 23,
			],
		];

		$this->assertNull(dot_array_search('', $data));
	}

	public function testArrayDotEarlyIndex()
	{
		$data = [
			'foo' => [
				'bar' => 23,
			],
		];

		$this->assertEquals(['bar' => 23], dot_array_search('foo', $data));
	}

	public function testArrayDotWildcard()
	{
		$data = [
			'foo' => [
				'bar' => [
					'baz' => 23,
				],
			],
		];

		$this->assertEquals(23, dot_array_search('foo.*.baz', $data));
	}

	public function testArrayDotWildcardWithMultipleChoices()
	{
		$data = [
			'foo' => [
				'buzz' => [
					'fizz' => 11,
				],
				'bar'  => [
					'baz' => 23,
				],
			],
		];

		$this->assertEquals(11, dot_array_search('foo.*.fizz', $data));
		$this->assertEquals(23, dot_array_search('foo.*.baz', $data));
	}

	public function testArrayDotNestedNotFound()
	{
		$data = [
			'foo' => [
				'buzz' => [
					'fizz' => 11,
				],
				'bar'  => [
					'baz' => 23,
				],
			],
		];

		$this->assertNull(dot_array_search('foo.*.notthere', $data));
	}

	public function testArrayDotIgnoresLastWildcard()
	{
		$data = [
			'foo' => [
				'bar' => [
					'baz' => 23,
				],
			],
		];

		$this->assertEquals(['baz' => 23], dot_array_search('foo.bar.*', $data));
	}

	/**
	 * @dataProvider deepSearchProvider
	 */
	public function testArrayDeepSearch($key, $expected)
	{
		$data = [
			'key1' => 'Value 1',
			'key5' => [
				'key51' => 'Value 5.1',
			],
			'key6' => [
				'key61' => [
					'key61' => 'Value 6.1',
					'key64' => [
						42       => 'Value 42',
						'key641' => 'Value 6.4.1',
						'key644' => [
							'key6441' => 'Value 6.4.4.1',
						],
					],
				],
			],
		];

		$result = array_deep_search($key, $data);

		$this->assertEquals($expected, $result);
	}

	public function testArrayDeepSearchReturnNullEmptyArray()
	{
		$data = [];

		$this->assertNull(array_deep_search('key644', $data));
	}

	/**
	 * @dataProvider sortByMultipleKeysProvider
	 */
	public function testArraySortByMultipleKeysWithArray($data, $sortColumns, $expected)
	{
		$success = array_sort_by_multiple_keys($data, $sortColumns);

		$this->assertTrue($success);
		$this->assertEquals($expected, array_column($data, 'name'));
	}

	/**
	 * @dataProvider sortByMultipleKeysProvider
	 */
	public function testArraySortByMultipleKeysWithObjects($data, $sortColumns, $expected)
	{
		// Morph to objects
		foreach($data as $index => $dataSet){
			$data[$index] = (object) $dataSet;
		}

		$success = array_sort_by_multiple_keys($data, $sortColumns);

		$this->assertTrue($success);
		$this->assertEquals($expected, array_column((array) $data, 'name'));
	}

	/**
	 * @dataProvider sortByMultipleKeysProvider
	 */
	public function testArraySortByMultipleKeysFailsEmptyParameter($data, $sortColumns, $expected)
	{
		// Both filled
		$success = array_sort_by_multiple_keys($data, $sortColumns);

		$this->assertTrue($success);

		// Empty $sortColumns
		$success = array_sort_by_multiple_keys($data, []);

		$this->assertFalse($success);

		// Empty &$array
		$data    = [];
		$success = array_sort_by_multiple_keys($data, $sortColumns);

		$this->assertFalse($success);
	}

	/**
	 * @dataProvider sortByMultipleKeysProvider
	 */
	public function testArraySortByMultipleKeysFailsInconsistentArraySizes($data)
	{
		// PHP 8 changes this error type
		if (version_compare(PHP_VERSION, '8.0', '<'))
		{
			$this->expectException('ErrorException');
		}
		else
		{
			$this->expectException('ValueError');
		}
		
		$this->expectExceptionMessage('Array sizes are inconsistent');

		$sortColumns = [
			'team.orders' => SORT_ASC,
			'positions'   => SORT_ASC,
		];

		$success = array_sort_by_multiple_keys($data, $sortColumns);
	}

	//--------------------------------------------------------------------

	public static function deepSearchProvider()
	{
		return [
			[
				'key6441',
				'Value 6.4.4.1',
			],
			[
				'key64421',
				null,
			],
			[
				42,
				'Value 42',
			],
			[
				'key644',
				['key6441' => 'Value 6.4.4.1'],
			],
			[
				'',
				null,
			],
		];
	}

	public static function sortByMultipleKeysProvider()
	{
		$seed = [
			0 => [
				'name'     => 'John',
				'position' => 3,
				'team'     => [
					'order' => 2,
				],
			],
			1 => [
				'name'     => 'Maria',
				'position' => 4,
				'team'     => [
					'order' => 1,
				],
			],
			2 => [
				'name'     => 'Frank',
				'position' => 1,
				'team'     => [
					'order' => 1,
				],
			],
		];

		return [
			[
				$seed,
				[
					'name' => SORT_STRING,
				],
				[
					'Frank',
					'John',
					'Maria',
				],
			],
			[
				$seed,
				[
					'team.order' => SORT_ASC,
					'position'   => SORT_ASC,
				],
				[
					'Frank',
					'Maria',
					'John',
				],
			],
		];
	}
}
