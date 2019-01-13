<?php

use PHPUnit\Framework\TestCase;
use function JohnWatkins0\WPAutoload\register_wp_autoload;

class WPAutoloadTest extends TestCase {
	public function test_register_wp_autoload() {
		$this->assertTrue( function_exists( 'JohnWatkins0\\WPAutoload\\register_wp_autoload' ) );

		register_wp_autoload( 'MyNamespace', __DIR__ . '/classes' );

		$this->assertEquals( '', MyNamespace\My_Class::MY_CONST );
		$this->assertEquals( 'trait var', MyNamespace\My_Class::$my_trait_var );
		$this->assertEquals( 'itit', MyNamespace\My_Class::double_it( 'it' ) );
	}
}