<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Lowercase;

    /**
     * @throws \ErrorException
     */
    interface TransformLowercase
    {
        function transform( string $value ): string ;
    }
?>