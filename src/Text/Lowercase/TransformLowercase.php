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
		/**
		 * @param string $value
		 * @return string
		 */
        function transform(
			string $value
		): string ;
    }
?>