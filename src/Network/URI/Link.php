<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI;
	
	use IOJaegers\HRBF\Network\URI\Objects\Domain;
	use IOJaegers\HRBF\Network\URI\States\SecureConnectionState;
	use IOJaegers\HRBF\Network\URI\Account\AccountCredential;
	use IOJaegers\HRBF\Network\URI\States\LinkScheme;
	
	
	/**
	 *
	 */
    class Link
    {
		/**
		 * @param LinkScheme|null $scheme
		 * @param Domain|null $domain
		 */
        function __construct(
			?LinkScheme $scheme,
			?Domain $domain
		)
        {
			$this->setScheme(
				$scheme
			);
			
			$this->setDomain(
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
			if( $this->isSchemeSet() )
			{
				$this->deleteScheme();
			}

			if( $this->isSecureStateSet() )
			{
				$this->deleteSecureState();
			}
	
			if( $this->isPortSet() )
			{
				$this->deletePort();
			}
	
			if( $this->isDomainSet() )
			{
				$this->deleteDomain();
			}
	
			if( $this->isCredentialsSet() )
			{
				$this->deleteCredentials();
			}
        }
		
		
		// Variables
		/**
		 * @var LinkScheme|null
		 */
		private ?LinkScheme $scheme = null;
	
		/**
		 * @var SecureConnectionState|null
		 */
		private ?SecureConnectionState $secureState = null;
	
		/**
		 * @var Domain|null
		 */
		private ?Domain $domain = null;
	
		/**
		 * @var int|null
		 */
		private ?int $port = null;
	
		/**
		 * @var AccountCredential|null
		 */
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
		 * @return void
		 */
		public final function deleteCredentials(): void
		{
			unset(
				$this->Credentials
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isCredentialsNull(): bool
		{
			return is_null(
				$this->credentials
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isCredentialsSet(): bool
		{
			return isset(
				$this->Credentials
			);
		}
		
		/**
		 * @return SecureConnectionState|null
		 */
		public final function getSecureState(): ?SecureConnectionState
		{
			return $this->secureState;
		}
	
		/**
		 * @return bool
		 */
		public final function isSecureStateSet(): bool
		{
			return isset(
				$this->secureState
			);
		}
	
		/**
		 * @return void
		 */
		public final function deleteSecureState(): void
		{
			unset(
				$this->secureState
			);
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
		
		/**
		 * @return Domain|null
		 */
		public final function getDomain(): ?Domain
		{
			return $this->domain;
		}
	
		/**
		 * @param Domain|null $domain
		 * @return void
		 */
		public final function setDomain(
			?Domain $domain
		): void
		{
			$this->domain = $domain;
		}
	
		/**
		 * @return void
		 */
		public final function deleteDomain(): void
		{
			unset(
				$this->domain
			);
		}
		
		/**
		 * @return bool
		 */
		public final function isDomainNull(): bool
		{
			return is_null(
				$this->domain
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isDomainSet(): bool
		{
			return isset(
				$this->domain
			);
		}
		
		/**
		 * @return int|null
		 */
		public final function getPort(): ?int
		{
			return $this->port;
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
		 * @return bool
		 */
		public final function isPortNull(): bool
		{
			return is_null(
				$this->port
			);
		}
		
		/**
		 * @return bool
		 */
		public final function isPortSet(): bool
		{
			return isset(
				$this->port
			);
		}
	
		/**
		 * @return void
		 */
		public final function deletePort(): void
		{
			unset(
				$this->port
			);
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
		 * @return bool
		 */
		public final function isSchemeNull(): bool
		{
			return is_null(
				$this->scheme
			);
		}
	
		/**
		 * @return void
		 */
		public final function deleteScheme(): void
		{
			unset(
				$this->scheme
			);
		}
		
		/**
		 * @return bool
		 */
		public final function isSchemeSet(): bool
		{
			return isset(
				$this->scheme
			);
		}
		
        /**
         * @return string|null
         */
        public final function toString(): ?string
        {
            return null;
        }

	}
?>