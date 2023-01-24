<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Lowercase;

    /**
     *
     */
    class SingleByteLowercase
        implements TransformLowercase
    {
        /**
         * @param string $value
         * @return string
         */
        public function transform(
			string $value
		): string
        {
            return strtolower( $value );
        }
    }
?>