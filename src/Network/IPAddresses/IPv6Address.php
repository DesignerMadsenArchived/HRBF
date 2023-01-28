<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Network\IPAddresses;
	
	/**
	 *
	 */
    class IPv6Address
    {
        public function __construct(
            ?string $IPv6Address = null
        )
        {
			
        }

        /**
         *
         */
        function __destruct()
        {

        }


        // Variables
		const separator = ':';

		// Object
		/**
		 * @return string
		 */
        public function toString(): string
        {
            return '';
        }
    }
?>