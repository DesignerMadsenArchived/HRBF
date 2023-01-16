<?php
    namespace IOJaegers\Hrbf;

    final class StringOperator
    {
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

        public static function validateHasValue( ?string $value ): bool
        {
            return isset( $value );
        }
    }
?>