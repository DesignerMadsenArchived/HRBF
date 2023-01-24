<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Strings\Uppercase;

    /**
     *
     */
    class SingleByteUppercase
        implements TransformUppercase
    {
        /**
         * @param string $value
         * @return string
         */
        public function transform(
			string $value
		) : string
        {
            return strtoupper( $value );
        }
    }
?>