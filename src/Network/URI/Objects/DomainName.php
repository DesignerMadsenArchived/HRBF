<?php
	/**
	 *
	 */
    namespace IOJaegers\Hrbf\Network\URI\Objects;


	/**
	 *
	 */
    class DomainName
    {
        //
		/**
		 *
		 */
        function __construct()
        {

        }
	
		/**
		 *
		 */
        function __destruct()
        {

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
		
	}
?>