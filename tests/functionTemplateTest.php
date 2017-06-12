<?php

class FunctionTemplateTest extends PHPUnit_Framework_TestCase
{
//	public function test_if_theme_exists()
//	{
//		$this->assertTrue("tna-web-archive" == wp_get_theme());
//	}
	public function test_exists_auto_id_h2()
	{
		$this->assertTrue(function_exists('auto_id_h2'));
	}
}