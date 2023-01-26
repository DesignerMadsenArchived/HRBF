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
		 *
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
            unset(
                $this->subdomains
            );

            unset(
                $this->name
            );

            unset(
                $this->tld
            );
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
	}
?>