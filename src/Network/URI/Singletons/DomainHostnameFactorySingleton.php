<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Singletons;
	
    use IOJaegers\HRBF\Network\URI\Factories\DomainHostnameFactory;

	
	/**
     *
     */
    class DomainHostnameFactorySingleton
    {
		// Variables
		private static ?DomainHostnameFactory $factory = null;
	
		// Accessors
		/**
		 * @return DomainHostnameFactory
		 */
		public static function getFactory(): DomainHostnameFactory
		{
			if( self::isFactoryNull() )
			{
				self::setFactory(
					new DomainHostnameFactory()
				);
			}
			return self::$factory;
		}
	
		/**
		 * @param DomainHostnameFactory|null $factory
		 */
		public static function setFactory(
			?DomainHostnameFactory $factory
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