<?php

class FunctionTemplateTest extends PHPUnit_Framework_TestCase
{
	public function test_exists_check_az_shortcode()
	{
		$this->assertTrue(function_exists('check_az_shortcode'));
	}
	public function test_false_check_az_shortcode()
	{
		$this->assertFalse(check_az_shortcode());
	}
	public function test_exists_a_z_shortcode()
	{
		$this->assertTrue(function_exists('a_z_shortcode'));
	}
	public function test_exists_auto_id_h2()
	{
		$this->assertTrue(function_exists('auto_id_h2'));
	}
}