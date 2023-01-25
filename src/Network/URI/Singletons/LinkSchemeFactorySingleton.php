<?php
	namespace IoJaegers\Hrbf\Network\URI\Singletons;
	
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
		
		private static ?LinkSchemeFactory $factory = null;
		
		
		/**
		 * @return LinkSchemeFactory|null
		 */
		public static function getFactory(): ?LinkSchemeFactory
		{
			if(
				is_null(
					self::$factory
				)
			)
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
	}
?>