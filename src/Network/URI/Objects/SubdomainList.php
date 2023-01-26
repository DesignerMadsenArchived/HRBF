<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI\Objects;


	/**
	 *
	 */
    class SubdomainList
    {
		/**
		 *
		 */
        function __construct()
        {
            $this->setSubdomains(
                array()
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
        }

        /**
         * @param int $indexPosition
         * @return Subdomain|null
         */
        public final function retrieve(
            int $indexPosition
        ): ?Subdomain
        {
            if( $this->isSubdomainsSet() )
            {
                $retrieve = $this->subdomains[ $indexPosition ];
                return $retrieve;
            }

            return null;
        }

        /**
         * @param Subdomain $subdomain
         * @return void
         */
        public final function insert(
            Subdomain $subdomain
        ): void
        {
            array_push( $this->subdomains, $subdomain );
        }

        /**
         * @param int $index
         * @return void
         */
        public final function delete(
            int $index
        ): void
        {
            unset(
                $this->subdomains[$index]
            );
        }

        /**
         * @param int $fromInIndex
         * @param int $toInIndex
         * @return void
         */
        public final function move(
            int $fromInIndex,
            int $toInIndex
        ): void
        {
            $from = $this->retrieve( $fromInIndex );
            $to = $this->retrieve( $toInIndex );

            if( isset( $from ) &&
                isset( $to ) )
            {
                $this->getSubdomains()[$toInIndex] = $from;
                $this->getSubdomains()[$fromInIndex] = $to;
            }
        }

        /**
         * @return int
         */
        public final function length(): int
        {
            if( $this->isSubdomainsNull() )
            {
                return -1;
            }

            return count(
                $this->subdomains
            );
        }

		
		// Variables
		private ?array $subdomains = null;


	
		// Accessors
		/**
		 * @return array|null
		 */
		public final function getSubdomains(): ?array
		{
			return $this->subdomains;
		}
	
		/**
		 * @param array|null $subdomains
		 */
		public final function setSubdomains( ?array $subdomains ): void
		{
			$this->subdomains = $subdomains;
		}

        /**
         * @return bool
         */
        public function isSubdomainsNull(): bool
        {
            return is_null(
                $this->subdomains
            );
        }

        /**
         * @return bool
         */
        public function isSubdomainsSet(): bool
        {
            return isset(
                $this->subdomains
            );
        }
	}
?>