<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI\Objects;


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
            $this->setTlc( $tld );
        }
	
		/**
		 *
		 */
        function __destruct()
        {
            if( $this->isTlcSet() )
            {
                unset(
                    $this->tlc
                );
            }
        }


		// Variables
		private ?string $tlc = null;
		

		// Accessors
		/**
		 * @return string|null
		 */
		public final function getTlc(): ?string
		{
			return $this->tlc;
		}
	
		/**
		 * @param string|null $tlc
		 */
		public final function setTlc(
			?string $tlc
		): void
		{
			$this->tlc = $tlc;
		}

        /**
         * @return bool
         */
        public final function isTlcNull(): bool
        {
            return is_null(
                $this->tlc
            );
        }

        /**
         * @return bool
         */
        public final function isTlcSet(): bool
        {
            return isset(
                $this->tlc
            );
        }
		
	}
?>