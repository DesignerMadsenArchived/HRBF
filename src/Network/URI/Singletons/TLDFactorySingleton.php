<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Singletons;


    use IOJaegers\HRBF\Network\URI\Factories\TLDFactory;

	/**
     *
     */
    class TLDFactorySingleton
    {
		// Variables
		private static ?TLDFactory $factory = null;
	
		// Accessors
		/**
		 * @return TLDFactory
		 */
		public static function getFactory(): TLDFactory
		{
			if( self::isFactoryNull() )
			{
				self::setFactory(
					new TLDFactory()
				);
			}
			
			return self::$factory;
		}
	
		/**
		 * @param TLDFactory|null $factory
		 */
		public static function setFactory(
			?TLDFactory $factory
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