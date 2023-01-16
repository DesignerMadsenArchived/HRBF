<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\stringAlgorithms\uppercase;

    /**
     *
     */
    class SingleByteUppercase
        implements TransformUppercase
    {
        /**
         * @param string|null $value
         * @return string|null
         */
        public function transform( ?string $value) : ?string
        {
            return strtoupper( $value );
        }
    }
?>