<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Factories;


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
                array()
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
        public final function getMap(): ?array
        {
            return $this->map;
        }

        /**
         * @param array|null $map
         */
        public final function setMap( ?array $map ): void
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
         * @param string $key
         * @return bool
         */
        public final function hasMapKey( string $key ): bool
        {
            if( $this->isMapNull() )
            {
                return false;
            }

            return array_key_exists(
                $key,
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