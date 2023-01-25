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
		/**
		 * @param LinkScheme|null $scheme
		 * @param DomainName|null $domain
		 */
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
			
			$this->setCredentials(
				new AccountCredential()
			);
        }
	
		/**
		 *
		 */
        function __destruct()
        {

        }
		
		// Variables
		private ?LinkScheme $scheme = null;
		
		private ?SecureConnectionState $secureState = null;
		
		private ?DomainName $domainName = null;
		
		private ?int $port = null;
		
		private ?AccountCredential $credentials = null;
		
		private ?string $path = null;
		
		private ?string $query = null;
		
		private ?string $fragment = null;
	
		
		// Accessors
		/**
		 * @return AccountCredential|null
		 */
		public final function getCredentials(): ?AccountCredential
		{
			return $this->credentials;
		}
	
		/**
		 * @param AccountCredential|null $credentials
		 */
		public final function setCredentials(
			?AccountCredential $credentials
		): void
		{
			$this->credentials = $credentials;
		}
		
		/**
		 * @return SecureConnectionState|null
		 */
		public final function getSecureState(): ?SecureConnectionState
		{
			return $this->secureState;
		}
		
		
		/**
		 * @return DomainName|null
		 */
		public final function getDomainName(): ?DomainName
		{
			return $this->domainName;
		}
	
		/**
		 * @param DomainName|null $domainName
		 */
		public final function setDomainName(
			?DomainName $domainName
		): void
		{
			$this->domainName = $domainName;
		}
	
		/**
		 * @return string|null
		 */
		public final function getFragment(): ?string
		{
			return $this->fragment;
		}
		
		/**
		 * @return string|null
		 */
		public final function getPath(): ?string
		{
			return $this->path;
		}
	
		/**
		 * @return int|null
		 */
		public final function getPort(): ?int
		{
			return $this->port;
		}
	
		/**
		 * @return string|null
		 */
		public final function getQuery(): ?string
		{
			return $this->query;
		}
	
		/**
		 * @return LinkScheme|null
		 */
		public final function getScheme(): ?LinkScheme
		{
			return $this->scheme;
		}
	
		/**
		 * @param LinkScheme|null $scheme
		 */
		public final function setScheme(
			?LinkScheme $scheme
		): void
		{
			$this->scheme = $scheme;
		}
		
		/**
		 * @param string|null $fragment
		 */
		public final function setFragment(
			?string $fragment
		): void
		{
			$this->fragment = $fragment;
		}
		
		/**
		 * @param string|null $path
		 */
		public final function setPath(
			?string $path
		): void
		{
			$this->path = $path;
		}
	
		/**
		 * @param int|null $port
		 */
		public final function setPort(
			?int $port
		): void
		{
			$this->port = $port;
		}
	
		/**
		 * @param string|null $query
		 */
		public final function setQuery(
			?string $query
		): void
		{
			$this->query = $query;
		}
	
		/**
		 * @param SecureConnectionState|null $secureState
		 */
		public final function setSecureState(
			?SecureConnectionState $secureState
		): void
		{
			$this->secureState = $secureState;
		}
	}
?>