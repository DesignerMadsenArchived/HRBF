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
         * @param string|null $value
         * @return string|null
         */
        public function transform( ?string $value ): ?string
        {
            return strtolower( $value );
        }
    }
?>