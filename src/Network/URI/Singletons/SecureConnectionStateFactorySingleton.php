<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Singletons;


	use IOJaegers\HRBF\Network\URI\Factories\SecureConnectionStateFactory;


    /**
	 *
	 */
    class SecureConnectionStateFactorySingleton
    {
		/**
		 *
		 */
        function __construct()
        {

        }
	
		/**
		 *
		 */
        function __destruct()
        {

        }

        // Variables
        private Static ?SecureConnectionStateFactory $stateFactory = null;


        // Accessors
        /**
         * @return SecureConnectionStateFactory|null
         */
        public final static function getStateFactory(): SecureConnectionStateFactory
        {
            if(
                is_null(
                    self::$stateFactory
                )
            )
            {
                self::$stateFactory = new SecureConnectionStateFactory();
            }

            return self::$stateFactory;
        }

        /**
         * @param SecureConnectionStateFactory|null $stateFactory
         */
        public final static function setStateFactory(
            ?SecureConnectionStateFactory $stateFactory
        ): void
        {
            self::$stateFactory = $stateFactory;
        }
	}
?>