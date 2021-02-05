<?php
namespace CodeIgniter\RESTful;

use CodeIgniter\Config\Services;
use CodeIgniter\Test\Mock\MockCodeIgniter;
use Config\App;

/**
 * Exercise our ResourceController class.
 * We know the resource routing works, from RouterTest,
 * so we need to make sure that the methods routed to
 * return correct responses.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState         disabled
 */
class ResourceControllerTest extends \CodeIgniter\Test\CIUnitTestCase
{

	/**
	 * @var \CodeIgniter\CodeIgniter
	 */
	protected $codeigniter;

	/**
	 *
	 * @var \CodeIgniter\Router\RoutesCollection
	 */
	protected $routes;

	//--------------------------------------------------------------------

	protected function setUp(): void
	{
		parent::setUp();

		Services::reset();

		$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';

		// Inject mock router.
		$this->routes = Services::routes();
		$this->routes->resource('work', ['controller' => '\Tests\Support\RESTful\Worker']);
		Services::injectMock('routes', $this->routes);

		$config            = new App();
		$this->codeigniter = new MockCodeIgniter($config);
	}

	public function tearDown(): void
	{
		parent::tearDown();

		if (count(ob_list_handlers()) > 1)
		{
			ob_end_clean();
		}
	}

	//--------------------------------------------------------------------

	public function testResourceGet()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
		];
		$_SERVER['argc']           = 2;
		$_SERVER['REQUEST_URI']    = '/work';
		$_SERVER['REQUEST_METHOD'] = 'GET';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['index']), $output);
	}

	public function testResourceGetNew()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'new',
		];
		$_SERVER['argc']           = 3;
		$_SERVER['REQUEST_URI']    = '/work/new';
		$_SERVER['REQUEST_METHOD'] = 'GET';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['new']), $output);
	}

	public function testResourceGetEdit()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'1',
			'edit',
		];
		$_SERVER['argc']           = 4;
		$_SERVER['REQUEST_URI']    = '/work/1/edit';
		$_SERVER['REQUEST_METHOD'] = 'GET';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['edit']), $output);
	}

	public function testResourceGetOne()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'1',
		];
		$_SERVER['argc']           = 3;
		$_SERVER['REQUEST_URI']    = '/work/1';
		$_SERVER['REQUEST_METHOD'] = 'GET';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['show']), $output);
	}

	public function testResourcePost()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
		];
		$_SERVER['argc']           = 2;
		$_SERVER['REQUEST_URI']    = '/work';
		$_SERVER['REQUEST_METHOD'] = 'POST';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['create']), $output);
	}

	public function testResourcePatch()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'123',
		];
		$_SERVER['argc']           = 3;
		$_SERVER['REQUEST_URI']    = '/work/123';
		$_SERVER['REQUEST_METHOD'] = 'PATCH';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['patch']), $output);
	}

	public function testResourcePut()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'123',
		];
		$_SERVER['argc']           = 3;
		$_SERVER['REQUEST_URI']    = '/work/123';
		$_SERVER['REQUEST_METHOD'] = 'PUT';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['put']), $output);
	}

	public function testResourceDelete()
	{
		$_SERVER['argv']           = [
			'index.php',
			'work',
			'123',
		];
		$_SERVER['argc']           = 3;
		$_SERVER['REQUEST_URI']    = '/work/123';
		$_SERVER['REQUEST_METHOD'] = 'DELETE';

		ob_start();
		$this->codeigniter->useSafeOutput(true)->run($this->routes);
		$output = ob_get_clean();

		$this->assertStringContainsString(lang('RESTful.notImplemented', ['delete']), $output);
	}

	//--------------------------------------------------------------------
	public function testModel()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();
		$this->assertEmpty($resource->getModel());
		$this->assertEmpty($resource->getModelName());
	}

	public function testModelBogus()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();

		$resource->setModel('Something');
		$this->assertEmpty($resource->getModel());
		$this->assertEquals('Something', $resource->getModelName());
	}

	public function testModelByName()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();
		$resource->setModel('\Tests\Support\Models\UserModel');
		$this->assertInstanceOf('CodeIgniter\Model', $resource->getModel());
		$this->assertEquals('\Tests\Support\Models\UserModel', $resource->getModelName());
	}

	public function testModelByObject()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();
		$model    = new \Tests\Support\Models\UserModel();
		$resource->setModel($model);
		$this->assertInstanceOf('CodeIgniter\Model', $resource->getModel());

		// Note that the leading backslash is missing if we build it this way
		$this->assertEquals('Tests\Support\Models\UserModel', $resource->getModelName());
	}

	//--------------------------------------------------------------------
	public function testFormat()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();
		$this->assertEquals('json', $resource->getFormat());

		$resource->setFormat('Nonsense');
		$this->assertEquals('json', $resource->getFormat());

		$resource->setFormat('xml');
		$this->assertEquals('xml', $resource->getFormat());
	}

	//--------------------------------------------------------------------
	public function testJSONFormatOutput()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();

		$config = new \Config\App;
		$uri    = new \CodeIgniter\HTTP\URI;
		$agent  = new \CodeIgniter\HTTP\UserAgent;

		$request  = new \CodeIgniter\HTTP\IncomingRequest($config, $uri, '', $agent);
		$response = new \CodeIgniter\HTTP\Response($config);
		$logger   = new \Psr\Log\NullLogger;

		$resource->initController($request, $response, $logger);
		$resource->setFormat('json');

		$data = [
			'foo' => 'bar',
		];

		$the_response = $resource->respond($data);
		$result       = $the_response->getBody();

		$JSONFormatter = new \CodeIgniter\Format\JSONFormatter;
		$expected      = $JSONFormatter->format($data);

		$this->assertEquals($expected, $result);
	}

	//--------------------------------------------------------------------
	public function testXMLFormatOutput()
	{
		$resource = new \CodeIgniter\Test\Mock\MockResourceController();

		$config = new \Config\App;
		$uri    = new \CodeIgniter\HTTP\URI;
		$agent  = new \CodeIgniter\HTTP\UserAgent;

		$request  = new \CodeIgniter\HTTP\IncomingRequest($config, $uri, '', $agent);
		$response = new \CodeIgniter\HTTP\Response($config);
		$logger   = new \Psr\Log\NullLogger;

		$resource->initController($request, $response, $logger);
		$resource->setFormat('xml');

		$data = [
			'foo' => 'bar',
		];

		$the_response = $resource->respond($data);
		$result       = $the_response->getBody();

		$XMLFormatter = new \CodeIgniter\Format\XMLFormatter;
		$expected     = $XMLFormatter->format($data);

		$this->assertEquals($expected, $result);
	}

}
