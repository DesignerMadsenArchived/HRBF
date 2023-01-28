<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Singletons;


    use IOJaegers\HRBF\Network\URI\Factories\SubdomainFactory;

	/**
     *
     */
    class SubdomainFactorySingleton
    {
		private static ?SubdomainFactory $factory = null;
	
		/**
		 * @return SubdomainFactory
		 */
		public static function getFactory(): SubdomainFactory
		{
			if( self::isFactoryNull() )
			{
				self::setFactory(
					new SubdomainFactory()
				);
			}
			
			return self::$factory;
		}
	
		/**
		 * @param SubdomainFactory|null $factory
		 */
		public static function setFactory(
			?SubdomainFactory $factory
		): void
		{
			self::$factory = $factory;
		}
		
		/**
		 * @return bool
		 */
		public static function isFactoryNull(): bool
		{
			return is_null(
				self::$factory
			);
		}
    }
?>