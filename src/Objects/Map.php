<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Objects;
	
	
	/**
	 *
	 */
	class Map
	{
		// Constructors
		/**
		 *
		 */
		public function __construct()
		{
			$this->setList(
				array()
			);
		}
		
		/**
		 * @return void
		 */
		public function __deconstruct()
		{
			if( $this->isListSet() )
			{
				$this->deleteList();
			}
		}
		
		// Variables
		private ?array $list = null;
		
		// Code
		/**
		 * @param string $key
		 * @return bool
		 */
		public function hasKey(
			string $key
		): bool
		{
			$rV = false;
			
			if( $this->isListNull() )
			{
				return $rV;
			}
			
			$rV = array_key_exists(
				$key,
				$this->getList()
			);
			
			return $rV;
		}
		
		/**
		 * @param string $entryKey
		 * @param $value
		 * @return void
		 */
		public function addEntry(
			string $entryKey,
			$value
		): void
		{
			if( !$this->hasKey( $value ) )
			{
				$toBeInserted = array(
					$entryKey => $value
				);
				
				
				$this->list = array_merge(
					$this->list,
					$toBeInserted
				);
			}
		}
		
		/**
		 * @param string $key
		 * @return mixed
		 */
		public function getEntry(
			string $key
		): mixed
		{
			return
				$this->getList()
				[ $key ];
		}
		
		/**
		 * @param string $key
		 * @return void
		 */
		public function deleteEntry(
			string $key
		): void
		{
			unset(
				$this->list[ $key ]
			);
		}
		
		// Accessors
		/**
		 * @return array|null
		 */
		public final function getList(): ?array
		{
			return $this->list;
		}
		
		/**
		 * @param array|null $list
		 */
		public final function setList(
			?array $list
		): void
		{
			$this->list = $list;
		}
		
		/**
		 * @return int|null
		 */
		public final function size(): ?int
		{
			if( $this->isListNull() )
			{
				return null;
			}
			
			return count(
				$this->getList()
			);
		}
		
		/**
		 * @return void
		 */
		public final function deleteList(): void
		{
			unset(
				$this->list
			);
		}
		
		/**
		 * @return bool
		 */
		public final function isListSet(): bool
		{
			return isset(
				$this->list
			);
		}
		
		/**
		 * @return bool
		 */
		public final function isListNull(): bool
		{
			return is_null(
				$this->list
			);
		}
	}
?>