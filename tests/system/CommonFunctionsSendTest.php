<?php


class CommonFunctionsSendTest extends \CodeIgniter\Test\CIUnitTestCase
{

	protected function setUp(): void
	{
		parent::setUp();

		unset($_ENV['foo'], $_SERVER['foo']);
	}

	//--------------------------------------------------------------------
	/**
	 * Make sure cookies are set by RedirectResponse this way
	 * See https://github.com/codeigniter4/CodeIgniter4/issues/1393
	 *
	 * @runInSeparateProcess
	 * @preserveGlobalState  disabled
	 */
	public function testRedirectResponseCookiesSent()
	{
		$login_time = time();

		$routes = service('routes');
		$routes->add('user/login', 'Auth::verify', ['as' => 'login']);

		$response = redirect()->route('login')
				->setCookie('foo', 'onething', YEAR)
				->setCookie('login_time', $login_time, YEAR);
		$response->pretend(false);
		$this->assertTrue($response->hasCookie('foo', 'onething'));
		$this->assertTrue($response->hasCookie('login_time'));
		$response->setBody('Hello');

		// send it
		ob_start();
		$response->send();

		$buffer = ob_clean();
		if (ob_get_level() > 0)
		{
			ob_end_clean();
		}

		// and what actually got sent?
		$this->assertHeaderEmitted('Set-Cookie: foo=onething;');
		$this->assertHeaderEmitted('Set-Cookie: login_time');
	}

}
