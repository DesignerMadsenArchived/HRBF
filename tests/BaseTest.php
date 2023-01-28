<?php
	declare(strict_types=1);
	
	namespace IOJaegers\Development\Tests\HRBF;
	
	use PHPUnit\Framework\TestCase;
	
	class BaseTest
		extends TestCase
	{
		public function __construct(
			string $name
		)
		{
			parent::__construct(
				$name
			);
		}
		
		public function testWrite(): void
		{
			$this->write('value');
			
			$this->assertTrue(true);
		}
		
		protected function write( $value )
		{
			
			fwrite(
				STDOUT,
				print_r(
					$value,
					true
				)
			);
		}
	}
?>