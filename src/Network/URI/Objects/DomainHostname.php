<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects;


	/**
	 *
	 */
    class DomainHostname
    {
        //
		/**
		 *
		 */
        function __construct(
            ?string $hostname,
            ?DomainTLD $tld
        )
        {
            $this->setHostname(
                $hostname
            );

            $this->setTld(
                $tld
            );
        }
	
		/**
		 *
		 */
        function __destruct()
        {
            unset(
                $this->hostname
            );
            unset(
                $this->tld
            );
        }
		
		
		// Variables
		private ?string $hostname = null;
        private ?DomainTLD $tld = null;
		
	
		// Accessors
		/**
		 * @return string|null
		 */
		public final function getHostname(): ?string
		{
			return $this->hostname;
		}
	
		/**
		 * @param string|null $hostname
		 */
		public final function setHostname(
			?string $hostname
		): void
		{
			$this->hostname = $hostname;
		}

        /**
         * @return bool
         */
        public final function isHostnameNull(): bool
        {
            return is_null(
                $this->hostname
            );
        }

        /**
         * @return bool
         */
        public final function isHostnameSet(): bool
        {
            return isset(
                $this->hostname
            );
        }

        /**
         * @return DomainTLD|null
         */
        public function getTld(): ?DomainTLD
        {
            return $this->tld;
        }

        /**
         * @param DomainTLD|null $tld
         */
        public function setTld(
            ?DomainTLD $tld
        ): void
        {
            $this->tld = $tld;
        }

        /**
         * @return string|null
         */
        public final function toString(): ?string
        {
            if( $this->isHostnameNull() )
            {
                return null;
            }

            return $this->hostname;
        }
		
	}
?>