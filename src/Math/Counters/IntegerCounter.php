<?php
    /**
     *
     */
	namespace IOJaegers\HRBF\Math\Counters;


    /**
     *
     */
    class IntegerCounter
        implements IntegerCounterInterface
    {
        /**
         * @param int $value
         */
        public function __construct(
			int $value = self::zero
		)
        {
            $this->setValue(
				$value
			);
        }

        // Variable
        private int $value = 0;

			// constants
        const one = 1;
		
        const zero = 0;
		
		
		// Interface Counter
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function decreaseByValue(
			mixed $withValue
		): void
		{
			$this->decrease(
				$withValue
			);
		}
	
		/**
		 * @return int
		 */
		public function getCounterValue(): int
		{
			return $this->getValue();
		}
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function increaseByValue(
			mixed $withValue
		): void
		{
			$this->increase(
				$withValue
			);
		}
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function setCounterValue(
			mixed $withValue
		): void
		{
			$this->setValue(
				$withValue
			);
		}
	
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
        public final function setValue(
			int $value
		): void
        {
            $this->value = $value;
        }

        /**
         * @return void
         */
        public final function increment(): void
        {
            $this->increase(
				self::one
			);
        }

        /**
         * @param int $value
         * @return void
         */
        public final function increase(
			int $value
		): void
        {
            $this->setValue(
				$this->getValue() + $value
			);
        }

        /**
         * @return void
         */
        public final function decrement(): void
        {
            $this->decrease(
				self::one
			);
        }

        /**
         * @param int $withValue
         * @return void
         */
        public final function decrease(
			int $withValue
		): void
        {
            $this->setValue(
				$this->getValue() - $withValue
			);
        }
	
		/**
		 * @return bool
		 */
		public function isCounterZero(): bool
		{
			return $this->getValue() == self::zero;
		}
	
		/**
		 * @param mixed $v
		 * @return bool
		 */
		public function isCounterEqualTo(
			mixed $v
		): bool
		{
			$r = false;
			
			if(
				is_integer( $v )
			)
			{
				$r = ( $this->getValue() == $v );
			}
			
			return $r;
		}
	}
?>