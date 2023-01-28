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
		/**
		 * @var DomainFactory|null
		 */
        private static ?DomainFactory $domainFactory = null;

		
        // Accessors
		/**
		 * @return DomainFactory
		 */
        public static function getFactory(): DomainFactory
        {
            if( self::isFactoryNull() )
            {
                self::$domainFactory = new DomainFactory();
            }

            return self::$domainFactory;
        }
	
		/**
		 * @param DomainFactory|null $domainFactory
		 * @return void
		 */
        public static function setFactory(
            ?DomainFactory $domainFactory
        ): void
        {
            self::$domainFactory = $domainFactory;
        }
	
		/**
		 * @return bool
		 */
		public static function isFactoryNull(): bool
		{
			return is_null(
				self::$domainFactory
			);
		}
	}
?>