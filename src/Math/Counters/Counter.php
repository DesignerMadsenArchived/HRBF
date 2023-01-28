<?php
    /**
 *
 */
	namespace IOJaegers\HRBF\Math\Counters;

	
    /**
     *
     */
    interface Counter
    {
		/**
		 * @return void
		 */
		public function increment(): void;
	
		/**
		 * @return void
		 */
		public function decrement(): void;
	
		
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function increaseByValue(
			mixed $withValue
		): void;
	
		/**
		 * @param mixed $withValue
		 * @return void
		 */
		public function decreaseByValue(
			mixed $withValue
		): void;
	
		/**
		 * @return mixed
		 */
		public function getCounterValue(): mixed;
	
		/**
		 * @param mixed $withValue
		 * @return mixed
		 */
		public function setCounterValue(
			mixed $withValue
		);
		
		public function isCounterZero(): bool;
		public function isCounterEqualTo( mixed $v ): bool;
	}
?>