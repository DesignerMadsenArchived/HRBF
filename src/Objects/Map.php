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
		
		public function addEntry(
			string $entryKey,
			$value
		): void
		{
			if( !$this->hasKey( $value ) )
			{
				$list = $this->getList();
				$list += [$entryKey => $value];
			}
		}
		
		public function getEntry(
			string $key
		): mixed
		{
			return $this->getList()[$key];
		}
		
		public function deleteEntry(
			string $key
		): void
		{
			unset(
				$this->getList()[ $key ]
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