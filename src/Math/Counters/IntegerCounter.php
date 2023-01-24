<?php
    /**
     *
     */
    namespace IoJaegers\Sitemap\Domain\TBM;


    /**
     *
     */
    class IntegerCounter
        implements Counter
    {
        /**
         * @param int $value
         */
        public function __construct(
			int $value = self::zero
		)
        {
            $this->setValue( $value );
        }

        // Variable
        private int $value = 0;

			// constants
        const one = 1;
		
        const zero = 0;

		
        // Accessor
        /**
         * @return int
         */
        public final function getValue(): int
        {
            return $this->value;
        }

        /**
         * @param int $value
         */
        public final function setValue( int $value ): void
        {
            $this->value = $value;
        }

        /**
         * @return void
         */
        public final function increment(): void
        {
            $this->increase( self::one );
        }

        /**
         * @param int $value
         * @return void
         */
        public final function increase( int $value ): void
        {
            $this->setValue( $this->getValue() + $value );
        }

        /**
         * @return void
         */
        public final function decrement(): void
        {
            $this->decrease( self::one );
        }

        /**
         * @param int $withValue
         * @return void
         */
        public final function decrease( int $withValue ): void
        {
            $this->setValue($this->getValue() - $withValue);
        }
    }
?>