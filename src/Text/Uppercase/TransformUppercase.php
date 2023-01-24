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
		/**
		 * @param string $value
		 * @return string
		 */
        function transform(
			string $value
		): string;
    }
?>