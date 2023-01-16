<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\stringAlgorithms\uppercase;

    /**
     * @throws \ErrorException
     */
    interface TransformUppercase
    {
        function transform( string $value ): string;
    }
?>