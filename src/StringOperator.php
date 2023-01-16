<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf;


    /**
     *
     */
    final class StringOperator
    {
        /**
         * @param string|null $value
         * @return string|null
         */
        public static function Upper( ?string $value ): null|string
        {
            $buffer = null;

            if( self::validateHasValue( $value ) )
            {
                $buffer = $value;
            }
            else
            {
                $buffer = '';
            }

            return $buffer;
        }

        /**
         * @param string|null $value
         * @return string|null
         */
        public static function Lower( ?string $value ): null|string
        {
            $buffer = null;

            if( self::validateHasValue( $value ) )
            {
                $buffer = $value;
            }
            else
            {
                $buffer = '';
            }

            return $buffer;
        }

        /**
         * @param string|null $value
         * @return bool
         */
        public static function validateHasValue( ?string $value ): bool
        {
            return isset( $value );
        }
    }
?>