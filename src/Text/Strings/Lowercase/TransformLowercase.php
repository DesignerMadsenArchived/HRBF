<?php
    /**
     *
     */
    namespace IOJaegers\Hrbf\Text\Strings\Lowercase;

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