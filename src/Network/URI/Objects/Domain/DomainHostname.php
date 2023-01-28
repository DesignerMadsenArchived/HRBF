<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects\Domain;


	/**
	 *
	 */
    class DomainHostname
    {
        //
		/**
		 * @param string|null $hostname
		 */
        function __construct(
            ?string $hostname
        )
        {
            $this->setHostname(
                $hostname
            );
        }
	
		/**
		 *
		 */
        function __destruct()
        {
			if( $this->isHostnameSet() )
			{
				$this->deleteHostname();
			}
        }
		
		// Variables
		private ?string $hostname = null;
		
	
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
		 * @return void
		 */
		public final function deleteHostname(): void
		{
			unset(
				$this->hostname
			);
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