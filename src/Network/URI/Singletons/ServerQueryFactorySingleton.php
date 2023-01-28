<?php
    /**
     *
     */
    namespace IOJaegers\HRBF\Network\URI\Singletons;

    use IOJaegers\HRBF\Network\URI\Factories\ServerQueryFactory;

	
	/**
     *
     */
    class ServerQueryFactorySingleton
    {
		// Variables
		private static ?ServerQueryFactory $factory =null;
	
		// Accessors
		/**
		 * @return ServerQueryFactory|null
		 */
		public static function getFactory(): ?ServerQueryFactory
		{
			if( self::isFactoryNull() )
			{
				self::setFactory(
					new ServerQueryFactory()
				);
			}
			
			return self::$factory;
		}
	
		/**
		 * @param ServerQueryFactory|null $factory
		 */
		public static function setFactory(
			?ServerQueryFactory $factory
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