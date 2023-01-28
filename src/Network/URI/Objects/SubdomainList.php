<?php
	/**
	 *
	 */
    namespace IoJaegers\HRBF\Network\URI\Objects;
	
	// Packages
	use IOJaegers\HRBF\Math\Counters\IntegerCounter;
	use IOJaegers\HRBF\Network\URI\Objects\Domain\Subdomain;
	
	
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
			if( $this->isSubdomainsSet() )
			{
				$this->deleteSubdomains();
			}
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
                $this->getSubdomains()[ $toInIndex ] = $from;
                $this->getSubdomains()[ $fromInIndex ] = $to;
            }
        }

        /**
         * @return int
         */
        public final function length(): int
        {
            if( $this->isSubdomainsNull() )
            {
                return self::minusOne;
            }

            return count(
                $this->subdomains
            );
        }

		
		// Variables
		private ?array $subdomains = null;
		
        private const zero = 0;
        private const one = 1;
		private const minusOne = -1;

        private const separator = '.';
		
        private const emptyString = '';

	
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
		public final function setSubdomains(
			?array $subdomains
		): void
		{
			$this->subdomains = $subdomains;
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
		 * @return void
		 */
		public final function deleteSubdomains(): void
		{
			unset(
				$this->subdomains
			);
		}

        /**
         * @return string
         */
        public final function toString(): string
        {
            if( $this->length() == self::zero )
            {
                return self::emptyString;
            }
			
			$index = null;

            $retStr = self::emptyString;
            $size = $this->length();
            $lastEntry = $this->length() - self::one;

			
            for(
				$index = new IntegerCounter();
				$index < $size;
				$index->increment()
			)
            {
                $current = $this->retrieve(
					$index->getValue()
				);

                if( $index->isCounterZero() )
                {
                    $retStr = $retStr .
                              $this->toStringStart(
                                  $current->toString()
                              );
                }
                else
                {
                    if( $index->isCounterEqualTo( $lastEntry ) )
                    {
                        $retStr = $retStr .
                            $this->toStringLast(
                                $current->toString()
                            );
                    }
                    else
                    {
                        $retStr = $retStr .
                            $this->toStringNormal(
                                $current->toString()
                            );
                    }
                }

            }

            return $retStr;
        }

        /**
         * @param $input
         * @return string
         */
        protected final function toStringNormal(
			$input
		): string
        {
            return self::separator . $input;
        }

        /**
         * @param $input
         * @return string
         */
        protected final function toStringStart(
			$input
		): string
        {
            return $input;
        }

        /**
         * @param $input
         * @return string
         */
        protected final function toStringLast(
			$input
		): string
        {
            return $input;
        }
	}
?>