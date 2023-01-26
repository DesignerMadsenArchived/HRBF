<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI;
	
	use IoJaegers\Hrbf\Network\URI\States\SecureConnectionState;
	use IoJaegers\Hrbf\Network\URI\Account\AccountCredential;
	use IoJaegers\Hrbf\Network\URI\Objects\DomainName;
	use IoJaegers\Hrbf\Network\URI\States\LinkScheme;
	
	
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
		 * @return int|null
		 */
		public final function getPort(): ?int
		{
			return $this->port;
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
		 * @param int|null $port
		 */
		public final function setPort(
			?int $port
		): void
		{
			$this->port = $port;
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