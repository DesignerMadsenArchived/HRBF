<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI;


	/**
	 *
	 */
    class DomainName
    {
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
		private ?string $tld = null;
		private ?array $subdomains = null;
		
	
		/**
		 * @return string|null
		 */
		public function getHostname(): ?string
		{
			return $this->hostname;
		}
	
		/**
		 * @return string|null
		 */
		public function getTld(): ?string
		{
			return $this->tld;
		}
	
		/**
		 * @param string|null $hostname
		 */
		public function setHostname(
			?string $hostname
		): void
		{
			$this->hostname = $hostname;
		}
	
		/**
		 * @param string|null $tld
		 */
		public function setTld(
			?string $tld
		): void
		{
			$this->tld = $tld;
		}
	
		/**
		 * @return array|null
		 */
		public function getSubdomains(): ?array
		{
			return $this->subdomains;
		}
	
		/**
		 * @param array|null $subdomains
		 */
		public function setSubdomains(
			?array $subdomains
		): void
		{
			$this->subdomains = $subdomains;
		}
	}
?>