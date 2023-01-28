<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Network\URI\Singletons;
	
	// Packages
	use IOJaegers\HRBF\Network\URI\Factories\LinkSchemeFactory;


    /**
	 *
	 */
	class LinkSchemeFactorySingleton
	{
		/**
		 *
		 */
		public function __construct()
		{
		
		}
		
		/**
		 *
		 */
		public function __destruct()
		{
		
		}
		
		/**
		 * @var LinkSchemeFactory|null
		 */
		private static ?LinkSchemeFactory $factory = null;
		
		
		/**
		 * @return LinkSchemeFactory|null
		 */
		public static function getFactory(): ?LinkSchemeFactory
		{
			if( self::isFactoryNull() )
			{
				self::setFactory(
					new LinkSchemeFactory()
				);
			}
			
			return self::$factory;
		}
		
		
		/**
		 * @param LinkSchemeFactory|null $factory
		 */
		public static function setFactory(
			?LinkSchemeFactory $factory
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