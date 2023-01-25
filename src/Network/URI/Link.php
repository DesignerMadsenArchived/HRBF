<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI;


	/**
	 *
	 */
    class Link
    {
        function __construct(
			?LinkScheme $scheme,
			?DomainName $domain
		)
        {
			$this->setScheme(
				$scheme
			);
			
			$this->setDomainName(
				$domain
			);
			
			$this->setSecureState(
				SecureConnectionState::NONE
			);
        }

        function __destruct()
        {

        }
		
		// Variables
		private ?LinkScheme $scheme = null;
		private ?SecureConnectionState $secureState = null;
		
		private ?DomainName $domainName = null;
		
		private ?int $port = null;
		
		private ?AccountCredentials $credentials = null;
		private ?string $path = null;
		
		private ?string $query = null;
		
		private ?string $fragment = null;
	
		/**
		 * @return AccountCredentials|null
		 */
		public function getCredentials(): ?AccountCredentials
		{
			return $this->credentials;
		}
	
		/**
		 * @param AccountCredentials|null $credentials
		 */
		public function setCredentials(
			?AccountCredentials $credentials
		): void
		{
			$this->credentials = $credentials;
		}
		
		// Accessors
		/**
		 * @return SecureConnectionState|null
		 */
		public function getSecureState(): ?SecureConnectionState
		{
			return $this->secureState;
		}
		
		
		/**
		 * @return DomainName|null
		 */
		public function getDomainName(): ?DomainName
		{
			return $this->domainName;
		}
	
		/**
		 * @param DomainName|null $domainName
		 */
		public function setDomainName(
			?DomainName $domainName
		): void
		{
			$this->domainName = $domainName;
		}
	
		/**
		 * @return string|null
		 */
		public function getFragment(): ?string
		{
			return $this->fragment;
		}
		
		/**
		 * @return string|null
		 */
		public function getPath(): ?string
		{
			return $this->path;
		}
	
		/**
		 * @return int|null
		 */
		public function getPort(): ?int
		{
			return $this->port;
		}
	
		/**
		 * @return string|null
		 */
		public function getQuery(): ?string
		{
			return $this->query;
		}
	
		/**
		 * @return LinkScheme|null
		 */
		public function getScheme(): ?LinkScheme
		{
			return $this->scheme;
		}
	
		/**
		 * @param LinkScheme|null $scheme
		 */
		public function setScheme(
			?LinkScheme $scheme
		): void
		{
			$this->scheme = $scheme;
		}
		
		/**
		 * @param string|null $fragment
		 */
		public function setFragment(
			?string $fragment
		): void
		{
			$this->fragment = $fragment;
		}
		
		/**
		 * @param string|null $path
		 */
		public function setPath(
			?string $path
		): void
		{
			$this->path = $path;
		}
	
		/**
		 * @param int|null $port
		 */
		public function setPort(
			?int $port
		): void
		{
			$this->port = $port;
		}
	
		/**
		 * @param string|null $query
		 */
		public function setQuery(
			?string $query
		): void
		{
			$this->query = $query;
		}
	
		/**
		 * @param SecureConnectionState|null $secureState
		 */
		public function setSecureState(
			?SecureConnectionState $secureState
		): void
		{
			$this->secureState = $secureState;
		}
	}
?>