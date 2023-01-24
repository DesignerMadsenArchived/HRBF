<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Lowercase;

    use IOJaegers\Hrbf\globals\Configuration;
    use IOJaegers\Hrbf\types\EncodingType;

    /**
     *
     */
    class MultiByteLowercase
        implements TransformLowercase
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
                return $this::LowerFunction( $value );
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
        protected function LowerFunction( string $value ): string
        {
            return mb_strtolower( $value, $this->default( $value ) );
        }


        /**
         * @param string $input
         * @return string
         */
        protected function default( string $input ): string
        {
            if( Configuration::isMultibyteAutoDetectEncodingAllowed() )
            {
                return mb_detect_encoding( $input );
            }

            return $this->defaultSetEncoding();
        }


        /**
         * @return string
         */
        protected function defaultSetEncoding():string
        {
            switch ( Configuration::getEncoding() )
            {
                case EncodingType::UTF8:
                    return "UTF-8";

                case EncodingType::ASCII:
                    return "ASCII";
            }

            return "ASCII";
        }
    }
?>