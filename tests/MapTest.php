<?php
	declare(strict_types=1);

	namespace IOJaegers\Development\Tests\HRBF;
	
	use IOJaegers\HRBF\Objects\Map;
	use PHPUnit\Framework\TestCase;
	
	/**
	 *
	 */
	class MapTest
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
			
			$this->setMap(
				new Map()
			);
			
			$this->getMap()
				 ->addEntry(
				self::retrieve,
				"b"
			);
		}
		
		//
		private ?Map $map = null;
		
		private const retrieve = 'test';
		
		
		/**
		 * @return void
		 */
		public function testAppendToAndDelete(): void
		{
			$testKeyForRemovel = 'toBeRemoved';
			
			$map = $this->getMap();
			
			$map->addEntry(
				'junhgrejn',
				"jnkefw"
			);
			
			$map->addEntry(
				$testKeyForRemovel,
				"asf"
			);
			
			$this->assertSame(
				3,
				$this->getMap()
					 ->size()
			);
			
			$map->deleteEntry( $testKeyForRemovel );
			
			$this->assertSame(
				2,
				$this->getMap()
					 ->size()
			);
		}
		
		/**
		 * @return void
		 */
		public function testGetResult(): void
		{
			$obj = $this->getMap()
						->getEntry( self::retrieve );
			
			$this->assertTrue(
				isset( $obj )
			);
		}
		
		/**
		 * @return void
		 */
		public function testIsSet(): void
		{
			$rV = $this->getMap()
					   ->isListSet();
			
			$this->assertTrue(
				$rV
			);
		}
		
		/**
		 * @return void
		 */
		public function testIsListNull(): void
		{
			$rV = $this->getMap()
					   ->isListNull();
			
			$this->assertNotTrue(
				$rV
			);
		}
		
		/**
		 * @return Map|null
		 */
		protected function getMap(): ?Map
		{
			return $this->map;
		}
		
		/**
		 * @param null $map
		 */
		protected function setMap( $map ): void
		{
			$this->map = $map;
		}
	}
?>