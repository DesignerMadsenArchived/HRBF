<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Uppercase;

	
    /**
     * @throws \ErrorException
     */
    interface TransformUppercase
    {
        function transform( string $value ): string;
    }
?>