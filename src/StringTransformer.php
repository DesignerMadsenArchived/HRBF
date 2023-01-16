<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf;

    use IOJaegers\Hrbf\globals\Configuration;
    use IOJaegers\Hrbf\types\StringAlgorithmType;

    use IOJaegers\Hrbf\stringAlgorithms\lowercase\MultiByteLowercase;
    use IOJaegers\Hrbf\stringAlgorithms\lowercase\SingleByteLowercase;
    use IOJaegers\Hrbf\stringAlgorithms\lowercase\TransformLowercase;
    use IOJaegers\Hrbf\stringAlgorithms\uppercase\MultiByteUppercase;
    use IOJaegers\Hrbf\stringAlgorithms\uppercase\SingleByteUppercase;
    use IOJaegers\Hrbf\stringAlgorithms\uppercase\TransformUppercase;

    /**
     *
     */
    final class StringTransformer
    {
        private static ?TransformUppercase $uppercase = null;
        private static ?TransformLowercase $lowercase = null;

        /**
         * @param string|null $value
         * @return string|null
         */
        public static function Upper( ?string $value ): null|string
        {
            if( self::validateHasValue( $value ) )
            {
                return self::chooseUpperAlgorithm( $value );
            }

            return null;
        }

        /**
         * @param string $input
         * @return string|null
         */
        private static function chooseUpperAlgorithm( string $input ): ?string
        {
            switch( Configuration::getStringAlgorithm() )
            {
                case StringAlgorithmType::SingleByte:
                    if( self::isUppercaseTransformSet() &&
                        ( self::getUppercase() instanceof SingleByteUppercase ) )
                    {
                        return self::getUppercase()->transform( $input );
                    }
                    else
                    {
                        self::setUppercase( new SingleByteUppercase() );
                        return self::getUppercase()->transform( $input );
                    }

                case StringAlgorithmType::Multibyte:
                    if( self::isUppercaseTransformSet() &&
                        ( self::getUppercase() instanceof MultiByteUppercase ) )
                    {
                        return self::getUppercase()->transform( $input );
                    }
                    else
                    {
                        self::setUppercase( new MultiByteUppercase() );
                        return self::getUppercase()->transform( $input );
                    }

                default:
                    return null;
            }
        }


        /**
         * @param string|null $value
         * @return string|null
         */
        public static function Lower( ?string $value ): null|string
        {
            if( self::validateHasValue( $value ) )
            {
                return self::chooseLowerAlgorithm( $value );
            }

            return null;
        }

        /**
         * @param string $value
         * @return string|null
         */
        private static function chooseLowerAlgorithm( string $value ): ?string
        {
            switch( Configuration::getStringAlgorithm() )
            {
                case StringAlgorithmType::SingleByte:
                    if( self::isLowercaseTransformSet() &&
                        ( self::getLowercase() instanceof SingleByteLowercase ) )
                    {
                        return self::getLowercase()->transform( $value );
                    }
                    else
                    {
                        self::setLowercase( new SingleByteLowercase() );
                        return self::getLowercase()->transform( $value );
                    }

                case StringAlgorithmType::Multibyte:
                    if( self::isLowercaseTransformSet() &&
                        ( self::getLowercase() instanceof MultiByteUppercase ) )
                    {
                        return self::getLowercase()->transform( $value );
                    }
                    else
                    {
                        self::setLowercase( new MultiByteLowercase() );
                        return self::getLowercase()->transform( $value );
                    }

                default:
                    return null;
            }
        }


        /**
         * @param string|null $value
         * @return bool
         */
        public static function validateHasValue( ?string $value ): bool
        {
            return isset( $value );
        }

        /**
         * @return TransformUppercase
         */
        public static function getUppercase(): TransformUppercase
        {
            return self::$uppercase;
        }

        /**
         * @param TransformUppercase $uppercase
         * @return void
         */
        public static function setUppercase( TransformUppercase $uppercase ): void
        {
            self::$uppercase = $uppercase;
        }

        /**
         * @return TransformLowercase|null
         */
        public static function getLowercase(): ?TransformLowercase
        {
            return self::$lowercase;
        }

        /**
         * @param TransformLowercase $lowercase
         * @return void
         */
        public static function setLowercase( TransformLowercase $lowercase ): void
        {
            self::$lowercase = $lowercase;
        }

        /**
         * @return bool
         */
        public static function isUppercaseTransformSet(): bool
        {
            return isset( self::$uppercase );
        }

        /**
         * @return bool
         */
        public static function isLowercaseTransformSet(): bool
        {
            return isset( self::$lowercase );
        }
    }
?>