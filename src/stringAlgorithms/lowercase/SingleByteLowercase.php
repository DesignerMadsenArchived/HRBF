<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\stringAlgorithms\lowercase;

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
        public function transform( string $value ): string
        {
            return strtolower( $value );
        }
    }
?>