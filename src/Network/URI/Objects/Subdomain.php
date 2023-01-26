<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects;


	/**
	 *
	 */
    class Subdomain
    {
		/**
		 *
		 */
        function __construct(
			?string $domain = null
		)
        {
			$this->setLocation(
				$domain
			);
        }
	
		/**
		 *
		 */
        function __destruct()
        {
            unset(
                $this->location
            );
        }
		
		
		// Variables
		private ?string $location = null;
		
	
		/**
		 * @return string|null
		 */
		public final function getLocation(): ?string
		{
			return $this->location;
		}
		
		/**
		 * @param string|null $location
		 */
		public final function setLocation(
			?string $location
		): void
		{
			$this->location = $location;
		}

        /**
         * @return string|null
         */
        public final function toString(): ?string
        {
            if( $this->isLocationSet() )
            {
                return $this->getLocation();
            }

            return null;
        }

        /**
         * @return bool
         */
        public final function isLocationNull(): bool
        {
            return is_null($this->location);
        }

        /**
         * @return bool
         */
        public final function isLocationSet(): bool
        {
            return isset($this->location);
        }
	}
?>