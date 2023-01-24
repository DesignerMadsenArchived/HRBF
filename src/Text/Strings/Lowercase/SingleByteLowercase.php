<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Strings\Lowercase;

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