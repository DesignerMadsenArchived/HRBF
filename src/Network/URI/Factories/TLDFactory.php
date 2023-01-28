<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Factories;
	
    use IOJaegers\HRBF\Objects\Map;

	
	/**
     *
     */
    class TLDFactory
    {
        /**
         *
         */
        public function __construct()
        {
			$this->setMap(
				new Map()
			);
        }
	
		/**
		 * @return void
		 */
        public function __deconstruct()
        {
            if( $this->isMapSet() )
            {
				$this->deleteMap();
            }
        }

        // Variables
        private ?array $map = null;

        /**
         * @return array|null
         */
        public final function getMap(): ?Map
        {
            return $this->map;
        }
	
		/**
		 * @param Map|null $map
		 * @return void
		 */
        public final function setMap(
			?Map $map
		): void
        {
            $this->map = $map;
        }
	
		/**
		 * @return void
		 */
		public final function deleteMap(): void
		{
			unset(
				$this->map
			);
		}

        /**
         * @return bool
         */
        public final function isMapNull(): bool
        {
            return is_null(
                $this->map
            );
        }

        /**
         * @return bool
         */
        public final function isMapSet(): bool
        {
            return isset(
                $this->map
            );
        }
    }
?>