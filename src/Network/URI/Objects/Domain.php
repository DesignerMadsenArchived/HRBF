<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI\Objects;


	/**
	 *
	 */
    class Domain
    {
		/**
		 *
		 */
        function __construct(
            ?DomainName $name = null,
            ?DomainTLD $tld = null
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

        }
		
		
		// Variables
        private ?SubdomainList $subdomains = null;
		private ?DomainName $name = null;
        private ?DomainTLD $tld = null;


        // Accessors
        /**
         * @return DomainName|null
         */
        public final function getName(): ?DomainName
        {
            return $this->name;
        }

        /**
         * @param DomainName|null $name
         */
        public final function setName(
            ?DomainName $name
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