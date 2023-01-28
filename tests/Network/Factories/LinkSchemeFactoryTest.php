<?php
	/**
	 *
	 */
	namespace IOJaegers\Development\Tests\HRBF\Network\Factories;
	
	// Packages used
	use IOJaegers\HRBF\Network\URI\Singletons\LinkSchemeFactorySingleton;
	use IOJaegers\HRBF\Network\URI\States\LinkScheme;
	use PHPUnit\Framework\TestCase;
	
	
	/**
	 *
	 */
	class LinkSchemeFactoryTest
		extends TestCase
	{
		/**
		 * @param string $name
		 */
		public function __construct(
			string $name
		)
		{
			parent::__construct(
				$name
			);
		}
		
		/**
		 * @return void
		 */
		public function __deconstruct()
		{
		
		}
		
		/**
		 * @return void
		 */
		public function testSingletonToType(): void
		{
			$factory = LinkSchemeFactorySingleton::getFactory();
			
			$this->assertTrue(
				isset(
					$factory
				)
			);
			
			$this->assertTrue(
				( $factory->convertToType('ssh2') == LinkScheme::SSH2 )
			);
			
			
			$this->assertTrue(
				( $factory->convertToType('http') == LinkScheme::HTTP )
			);
			
			
			$this->assertTrue(
				( $factory->convertToType('ftp') == LinkScheme::FTP )
			);
			
			
			$this->assertTrue(
				( $factory->convertToType('expect') == LinkScheme::EXPECT )
			);
			
			
			$this->assertTrue(
				( $factory->convertToType('glob') == LinkScheme::GLOB )
			);
			
			$this->assertTrue(
				( $factory->convertToType('data') == LinkScheme::DATA )
			);
			
			$this->assertTrue(
				( $factory->convertToType('zlib') == LinkScheme::ZLIB )
			);
			
			$this->assertTrue(
				( $factory->convertToType('rar') == LinkScheme::RAR )
			);
			
			
			$this->assertTrue(
				( $factory->convertToType('ogg') == LinkScheme::OGG )
			);
			
			$this->assertTrue(
				( $factory->convertToType('php') == LinkScheme::PHP )
			);
			
			$this->assertTrue(
				( $factory->convertToType('phar') == LinkScheme::PHAR )
			);
		}
		
		/**
		 * @return void
		 */
		public function testSingletonToString(): void
		{
			$factory = LinkSchemeFactorySingleton::getFactory();
			
			$this->assertTrue(
				isset(
					$factory
				)
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::DATA
				),
				'data'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::EXPECT
				),
				'expect'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::FTP
				),
				'ftp'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::GLOB
				),
				'glob'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::HTTP
				),
				'http'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::NONE
				),
				'none'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::OGG
				),
				'ogg'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::PHAR
				),
				'phar'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::PHP
				),
				'php'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::RAR
				),
				'rar'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::SSH2
				),
				'ssh2'
			);
			
			$this->assertSame(
				$factory->convertToString(
					LinkScheme::ZLIB
				),
				'zlib'
			);
			
		}
	}
?>