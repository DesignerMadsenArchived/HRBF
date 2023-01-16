<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\stringAlgorithms\lowercase;

    /**
     * @throws \ErrorException
     */
    interface TransformLowercase
    {
        function transform( string $value ): string ;
    }
?>