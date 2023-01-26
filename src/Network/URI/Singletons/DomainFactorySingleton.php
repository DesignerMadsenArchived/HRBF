<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Singletons;


	use IOJaegers\HRBF\Network\URI\Factories\DomainFactory;


    /**
	 *
	 */
    class DomainFactorySingleton
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


        // Variable
        private static DomainFactory|null $domainFactory = null;

        // Accessors
        /**
         * @return DomainFactory|null
         */
        public static function getDomainFactory(): DomainFactory
        {
            if(
                is_null(
                    self::$domainFactory
                )
            )
            {
                self::$domainFactory = new DomainFactory();
            }

            return self::$domainFactory;
        }

        /**
         * @param DomainFactory|null $domainFactory
         */
        public static function setDomainFactory(
            ?DomainFactory $domainFactory
        ): void
        {
            self::$domainFactory = $domainFactory;
        }
	}
?>