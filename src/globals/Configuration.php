<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\globals;

    use IOJaegers\Hrbf\types\EncodingType;
    use IOJaegers\Hrbf\types\StringAlgorithmType;


    /**
     *
     */
    final class Configuration
    {
        // Variables
        private static EncodingType $encoding = EncodingType::UTF8;
        private static StringAlgorithmType $stringAlgorithm = StringAlgorithmType::SingleByte;

        private static bool $multibyteAllowed = false;
        private static bool $multibyteAutoDetectEncoding = false;


        // Accessors
        /**
         * @return EncodingType
         */
        public static function getEncoding(): EncodingType
        {
            return self::$encoding;
        }

        /**
         * @param EncodingType $encoding
         */
        public static function setEncoding( EncodingType $encoding ): void
        {
            self::$encoding = $encoding;
        }

        /**
         * @return StringAlgorithmType
         */
        public static function getStringAlgorithm(): StringAlgorithmType
        {
            return self::$stringAlgorithm;
        }

        /**
         * @param StringAlgorithmType $stringAlgorithm
         */
        public static function setStringAlgorithm( StringAlgorithmType $stringAlgorithm ): void
        {
            self::$stringAlgorithm = $stringAlgorithm;
        }

        /**
         * @return bool
         */
        public static function isMultibyteAllowed(): bool
        {
            return self::$multibyteAllowed;
        }

        /**
         * @param bool $multibyteAllowed
         */
        public static function setMultibyteAllowed( bool $multibyteAllowed ): void
        {
            self::$multibyteAllowed = $multibyteAllowed;
        }

        /**
         * @return bool
         */
        public static function isMultibyteAutoDetectEncodingAllowed(): bool
        {
            return self::$multibyteAutoDetectEncoding;
        }

        /**
         * @param bool $multibyteAutoDetectEncoding
         */
        public static function setMultibyteAutoDetectEncoding( bool $multibyteAutoDetectEncoding ): void
        {
            self::$multibyteAutoDetectEncoding = $multibyteAutoDetectEncoding;
        }

    }
?>