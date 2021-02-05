<?php

use CodeIgniter\View\View;

class ViewTest extends \CodeIgniter\Test\CIUnitTestCase
{

	protected $loader;
	protected $viewsDir;
	protected $config;

	//--------------------------------------------------------------------

	protected function setUp(): void
	{
		parent::setUp();

		$this->loader   = \CodeIgniter\Config\Services::locator();
		$this->viewsDir = __DIR__ . '/Views';
		$this->config   = new Config\View();
	}

	//--------------------------------------------------------------------

	public function testSetVarStoresData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('foo', 'bar');

		$this->assertEquals(['foo' => 'bar'], $view->getData());
	}

	public function testSetVarOverwrites()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('foo', 'bar');
		$view->setVar('foo', 'baz');

		$this->assertEquals(['foo' => 'baz'], $view->getData());
	}

	//--------------------------------------------------------------------

	public function testSetDataStoresValue()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$expected = [
			'foo' => 'bar',
			'bar' => 'baz',
		];

		$view->setData($expected);

		$this->assertEquals($expected, $view->getData());
	}

	public function testSetDataMergesData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$expected = [
			'fee' => 'fi',
			'foo' => 'bar',
			'bar' => 'baz',
		];

		$view->setVar('fee', 'fi');
		$view->setData([
			'foo' => 'bar',
			'bar' => 'baz',
		]);

		$this->assertEquals($expected, $view->getData());
	}

	public function testSetDataOverwritesData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$expected = [
			'foo' => 'bar',
			'bar' => 'baz',
		];

		$view->setVar('foo', 'fi');
		$view->setData([
			'foo' => 'bar',
			'bar' => 'baz',
		]);

		$this->assertEquals($expected, $view->getData());
	}

	//--------------------------------------------------------------------

	public function testSetVarWillEscape()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('foo', 'bar&', 'html');

		$this->assertEquals(['foo' => 'bar&amp;'], $view->getData());
	}

	public function testSetDataWillEscapeAll()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$expected = [
			'foo' => 'bar&amp;',
			'bar' => 'baz&lt;',
		];

		$view->setData([
			'foo' => 'bar&',
			'bar' => 'baz<',
		], 'html');

		$this->assertEquals($expected, $view->getData());
	}

	//--------------------------------------------------------------------

	public function testRenderFindsView()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';

		$this->assertStringContainsString($expected, $view->render('simple'));
	}

	//--------------------------------------------------------------------

	public function testRenderString()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';

		$this->assertEquals($expected, $view->renderString('<h1><?= $testString ?></h1>'));
	}

	public function testRenderStringNullTempdata()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);
		$this->assertEquals('test string', $view->renderString('test string'));
	}

	//--------------------------------------------------------------------

	public function testRendersThrowsExceptionIfFileNotFound()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$this->expectException(\CodeIgniter\View\Exceptions\ViewException::class);
		$view->setVar('testString', 'Hello World');

		$view->render('missing');
	}

	//--------------------------------------------------------------------

	public function testRenderScrapsData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$view->render('simple', null, false);

		$this->assertEmpty($view->getData());
	}

	//--------------------------------------------------------------------

	public function testRenderCanSaveData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$view->render('simple', null, true);

		$expected = ['testString' => 'Hello World'];

		$this->assertEquals($expected, $view->getData());
	}

	public function testRenderCanSaveDataThroughConfigSetting()
	{
		$this->config->saveData = true;

		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$view->render('simple');

		$expected = ['testString' => 'Hello World'];

		$this->assertEquals($expected, $view->getData());
	}

	//--------------------------------------------------------------------

	public function testCanDeleteData()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$view->render('simple', null, true);

		$view->resetData();

		$this->assertEquals([], $view->getData());
	}

	//--------------------------------------------------------------------

	public function testCachedRender()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';

		$this->assertStringContainsString($expected, $view->render('simple', ['cache' => 10]));
		// this second renderings should go thru the cache
		$this->assertStringContainsString($expected, $view->render('simple', ['cache' => 10]));
	}

	//--------------------------------------------------------------------

	public function testRenderStringSavingData()
	{
		$view     = new View($this->config, $this->viewsDir, $this->loader);
		$expected = '<h1>Hello World</h1>';

		//I think saveData is sava current data, is not clean already set data.
		$view->setVar('testString', 'Hello World');
		$this->assertEquals($expected, $view->renderString('<h1><?= $testString ?></h1>', [], false));
		$this->assertArrayNotHasKey('testString', $view->getData());

		$view->setVar('testString', 'Hello World');
		$this->assertEquals($expected, $view->renderString('<h1><?= $testString ?></h1>', [], true));
		$this->assertArrayHasKey('testString', $view->getData());
	}

	//--------------------------------------------------------------------

	public function testPerformanceLogging()
	{
		// Make sure debugging is on for our view
		$view = new View($this->config, $this->viewsDir, $this->loader, true);
		$this->assertEquals(0, count($view->getPerformanceData()));

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';
		$this->assertEquals($expected, $view->renderString('<h1><?= $testString ?></h1>', [], true));
		$this->assertEquals(1, count($view->getPerformanceData()));
	}

	public function testPerformanceNonLogging()
	{
		// Make sure debugging is on for our view
		$view = new View($this->config, $this->viewsDir, $this->loader, false);
		$this->assertEquals(0, count($view->getPerformanceData()));

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';
		$this->assertEquals($expected, $view->renderString('<h1><?= $testString ?></h1>', [], true));
		$this->assertEquals(0, count($view->getPerformanceData()));
	}

	public function testRenderLayoutExtendsCorrectly()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = "<p>Open</p>\n<h1>Hello World</h1>";

		$this->assertStringContainsString($expected, $view->render('extend'));
	}

	public function testRenderLayoutExtendsMultipleCalls()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = "<p>Open</p>\n<h1>Hello World</h1>\n<p>Hello World</p>";

		$view->render('extend');

		$this->assertStringContainsString($expected, $view->render('extend'));
	}

	public function testRenderLayoutMakesDataAvailableToBoth()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = "<p>Open</p>\n<h1>Hello World</h1>\n<p>Hello World</p>";

		$this->assertStringContainsString($expected, $view->render('extend'));
	}

	public function testRenderLayoutSupportsMultipleOfSameSection()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = "<p>First</p>\n<p>Second</p>";

		$this->assertStringContainsString($expected, $view->render('extend_two'));
	}

	public function testRenderLayoutWithInclude()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = "<p>Open</p>\n<h1>Hello World</h1>";

		$content = $view->render('extend_include');

		$this->assertTrue(strpos($content, '<p>Open</p>') !== false);
		$this->assertTrue(strpos($content, '<h1>Hello World</h1>') !== false);
		$this->assertEquals(2, substr_count($content, 'Hello World'));
	}

	public function testRenderLayoutBroken()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '';

		$this->expectException(\RuntimeException::class);
		$this->assertStringContainsString($expected, $view->render('broken'));
	}

	public function testRenderLayoutNoContentSection()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '';

		$this->assertStringContainsString($expected, $view->render('apples'));
	}

	public function testRenderSaveDataCover()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);
		$this->setPrivateProperty($view, 'saveData', true);
		$view->setVar('testString', 'test');
		$view->render('simple', null, false);
		$this->assertEquals(true, $this->getPrivateProperty($view, 'saveData'));
	}

	public function testRenderSaveDataUseAflterSaveDataFalse()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);
		$view->setVar('testString', 'test');
		$view->render('simple', null, true);
		$view->render('simple', null, false);
		$this->assertStringContainsString('<h1>test</h1>', $view->render('simple', null, false));
	}

	public function testCachedAutoDiscoverAndRender()
	{
		$view = new View($this->config, $this->viewsDir, $this->loader);

		$view->setVar('testString', 'Hello World');
		$expected = '<h1>Hello World</h1>';

		$this->assertStringContainsString($expected, $view->render('Nested/simple', ['cache' => 10]));
		// this second renderings should go thru the cache
		$this->assertStringContainsString($expected, $view->render('Nested/simple', ['cache' => 10]));
	}
}
