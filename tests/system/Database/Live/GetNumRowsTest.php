<?php namespace Builder;

use CodeIgniter\Test\CIDatabaseTestCase;

class GetNumRowsTest extends CIDatabaseTestCase
{
	protected $refresh = true;

	protected $seed = 'Tests\Support\Database\Seeds\CITestSeeder';

	/**
	 * Added as instructed at https://codeigniter4.github.io/userguide/testing/database.html#the-test-class
	 * {@inheritDoc}
	 *
	 * @see \CodeIgniter\Test\CIDatabaseTestCase::setUp()
	 */
	public function setUp(): void
	{
		parent::setUp();
	}

	/**
	 * Added as instructed at https://codeigniter4.github.io/userguide/testing/database.html#the-test-class
	 * {@inheritDoc}
	 *
	 * @see \CodeIgniter\Test\CIDatabaseTestCase::tearDown()
	 */
	public function tearDown(): void
	{
		parent::tearDown();
	}

	/**
	 * tests newly added ResultInterface::getNumRows with a live db
	 */
	public function testGetRowNum()
	{
		$query = $this->db->table('job')->get();
		$this->assertEquals(4, $query->getNumRows());
	}

}
