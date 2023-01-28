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
		/**
		 * @var SecureConnectionStateFactory|null
		 */
        private Static ?SecureConnectionStateFactory $stateFactory = null;


        // Accessors
		/**
		 * @return SecureConnectionStateFactory
		 */
        public final static function getStateFactory(): SecureConnectionStateFactory
        {
            if( self::isFactoryNull() )
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
	
		/**
		 * @return bool
		 */
		public static function isFactoryNull(): bool
		{
			return is_null(
				self::$stateFactory
			);
		}
	}
?>