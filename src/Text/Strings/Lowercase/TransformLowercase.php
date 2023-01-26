<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Text\Strings\Lowercase;

    /**
     * @throws \ErrorException
     */
    interface TransformLowercase
    {
		/**
		 * @param string $value
		 * @return string
		 */
        function transform(
			string $value
		): string ;
    }
?>