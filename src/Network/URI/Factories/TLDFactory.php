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
                unset(
                    $this->map
                );
            }
        }

        // Variables
        private ?array $map = null;

        /**
         * @return array|null
         */
        public function getMap(): ?array
        {
            return $this->map;
        }

        /**
         * @param array|null $map
         */
        public function setMap( ?array $map ): void
        {
            $this->map = $map;
        }

        /**
         * @param string $key
         * @return bool
         */
        public function hasMapKey( string $key ): bool
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
        public function isMapNull(): bool
        {
            return is_null(
                $this->map
            );
        }

        /**
         * @return bool
         */
        public function isMapSet(): bool
        {
            return isset(
                $this->map
            );
        }
    }
?>