<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects;


	/**
	 *
	 */
    class DomainTLD
    {
        // Constructors
		/**
		 *
		 */
        function __construct(
            ?string $tld = null
        )
        {
            $this->setTld( $tld );
        }
	
		/**
		 *
		 */
        function __destruct()
        {
            if( $this->isTldSet() )
            {
				$this->deleteTld();
            }
        }


		// Variables
		private ?string $tld = null;
		

		// Accessors
		/**
		 * @return string|null
		 */
		public final function getTld(): ?string
		{
			return $this->tld;
		}
	
		/**
		 * @param string|null $tlc
		 */
		public final function setTld(
			?string $tlc
		): void
		{
			$this->tld = $tlc;
		}

        /**
         * @return bool
         */
        public final function isTlcNull(): bool
        {
            return is_null(
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
		 * @return void
		 */
		public final function deleteTld(): void
		{
			unset(
				$this->tld
			);
		}


        /**
         * @return string|null
         */
        public final function toString(): ?string
        {
            if( $this->isTldSet() )
            {
                return $this->tld;
            }

            return null;
        }
	}
?>