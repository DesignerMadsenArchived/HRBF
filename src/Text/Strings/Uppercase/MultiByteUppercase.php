<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Strings\Uppercase;

    use IOJaegers\Hrbf\globals\Configuration;
    use IOJaegers\Hrbf\Types\EncodingType;


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
        public function transform(
			string $value
		): string
        {
            if( Configuration::isMultibyteAllowed() )
            {
                return $this->UpperFunction( $value );
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
        protected function UpperFunction(
			string $value
		): string
        {
            return mb_strtoupper( $value, $this->default( $value ) );
        }

        /**
         * @param string $value
         * @return string
         */
        protected function default(
			string $value
		): string
        {
            if( Configuration::isMultibyteAutoDetectEncodingAllowed() )
            {
                return mb_detect_encoding( $value );
            }

            return $this->defaultSetEncoding();
        }

        /**
         * @return string
         */
        protected function defaultSetEncoding(): string
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