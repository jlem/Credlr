<?php

use Credlr\User;

class EndPointsTest extends TestCase {

	public function testHomePageFor200Response()
	{
		$this->visit('/');
	}

	public function testLoginPageFor200Response()
	{
		$this->visit('/login');
	}

	public function testLoginPageRedirectIfLoggedInAlready()
	{
		$user = new User(['name' => 'John']);
		$this->be($user);
		$this->visit('/login')
			 ->andSee('Hey')
     		 ->onPage('/');
	}
}