<?php

class FunctionTemplateTest extends PHPUnit_Framework_TestCase
{
	public function test_if_template_function_file_exists()
	{
		$this->assertFileExists('inc/functions/functions-template.php');
	}

	public function test_if_shortcode_function_file_exists()
	{
		$this->assertFileExists('inc/functions/shortcode.php');
	}

	public function test_exists_check_az_shortcode()
	{
		$this->assertTrue(function_exists('check_az_shortcode'));
	}

	public function test_false_check_az_shortcode()
	{
		$this->assertFalse(check_az_shortcode());
	}

	public function test_shortcode_string_start()
	{
		$this->assertStringStartsWith('<ul id="a-z-menu">', a_z_shortcode());
	}

	public function test_shortcode_string_end()
	{
		$this->assertStringEndsWith('<div class="clearfix"></div>', a_z_shortcode());
	}

	public function test_exists_a_z_shortcode()
	{
		$this->assertTrue(function_exists('a_z_shortcode'));
	}

	public function test_regular_expression()
	{
		$regularExpContent = '/(\<h[2](.*?))\>(.*)(<\/h[2]>)/i';
		$this->assertRegexp($regularExpContent, '<h2>*?</h2>');
	}

	public function test_exists_auto_id_h2()
	{
		$this->assertTrue(function_exists('auto_id_h2'));
	}
}