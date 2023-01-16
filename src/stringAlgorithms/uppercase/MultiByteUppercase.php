<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\stringAlgorithms\uppercase;

    use IOJaegers\Hrbf\globals\Configuration;


    /**
     *
     */
    class MultiByteUppercase
        implements TransformUppercase
    {
        /**
         * @param string $value
         * @return string
         * @throws \ErrorException
         */
        public function transform( string $value ): string
        {
            if( Configuration::isMultibyteAllowed() )
            {
                return $this->default( $value );
            }
            else
            {
                throw new \ErrorException('error has occured');
            }
        }

        /**
         * @param string $value
         * @return string
         */
        protected function default( string $value ): string
        {
            $encoding = mb_detect_encoding( $value );
            return mb_strtoupper( $value, $encoding );
        }
    }
?>