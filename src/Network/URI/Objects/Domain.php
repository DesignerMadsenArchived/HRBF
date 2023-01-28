<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects;


	/**
	 *
	 */
    class Domain
    {
		/**
		 * @param DomainHostname|null $name
		 * @param DomainTLD|null $tld
		 */
        function __construct(
            ?DomainHostname $name = null,
            ?DomainTLD      $tld = null
        )
        {
            $this->setName(
                $name
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
			if( $this->isSubdomainsSet() )
			{
				$this->deleteSubdomains();
			}

			if( $this->isNameSet() )
			{
				$this->deleteName();
			}

			if( $this->isTldSet() )
			{
				$this->deleteTld();
			}
        }

		
		// Variables
        private ?SubdomainList $subdomains = null;

		private ?DomainHostname $name = null;
		
        private ?DomainTLD $tld = null;


        // Accessors
        /**
         * @return DomainHostname|null
         */
        public final function getName(): ?DomainHostname
        {
            return $this->name;
        }

        /**
         * @param DomainHostname|null $name
         */
        public final function setName(
            ?DomainHostname $name
        ): void
        {
            $this->name = $name;
        }
	
		/**
		 * @return void
		 */
		public final function deleteName(): void
		{
			unset(
				$this->name
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isNameNull(): bool
		{
			return is_null(
				$this->name
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isNameSet(): bool
		{
			return isset(
				$this->name
			);
		}

        /**
         * @return DomainTLD|null
         */
        public final function getTld(): ?DomainTLD
        {
            return $this->tld;
        }

        /**
         * @param DomainTLD|null $tld
         */
        public final function setTld(
            ?DomainTLD $tld
        ): void
        {
            $this->tld = $tld;
        }
	
		/**
		 * @return void
		 */
		public final function deleteTld(): void
		{
			unset(
				$this->tld
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isTldSet(): bool
		{
			return isset(
				$this->tld
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isTldNull(): bool
		{
			return is_null(
				$this->name
			);
		}

        /**
         * @return SubdomainList|null
         */
        public final function getSubdomains(): ?SubdomainList
        {
            return $this->subdomains;
        }

        /**
         * @param SubdomainList|null $subdomains
         */
        public final function setSubdomains(
            ?SubdomainList $subdomains
        ): void
        {
            $this->subdomains = $subdomains;
        }
	
		/**
		 * @return void
		 */
		public final function deleteSubdomains(): void
		{
			unset(
				$this->subdomains
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isSubdomainsNull(): bool
		{
			return is_null(
				$this->subdomains
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isSubdomainsSet(): bool
		{
			return isset(
				$this->subdomains
			);
		}
	
		/**
		 * @return int
		 */
		public final function numberOfSubdomains(): int
		{
			if( $this->isNameSet() )
			{
				return $this->getSubdomains()
							->length();
			}
			
			return -1;
		}
	}
?>