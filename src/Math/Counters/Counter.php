<?php
    /**
 *
 */
	namespace IOJaegers\Hrbf\Math\Counters;

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
		
    }
?>