<?php
	namespace IOJaegers\HRBF\Network\URI\Factories;
	
	use IOJaegers\HRBF\Network\URI\States\LinkScheme;
	
	/**
	 *
	 */
	class LinkSchemeFactory
	{
		/**
		 *
		 */
		public function __construct()
		{
		
		}
		
		/**
		 * @return void
		 */
		public function __deconstruct()
		{
		
		}
		
		/**
		 * @param string $scheme_label
		 * @return LinkScheme
		 */
		public final function convert( string $scheme_label ): LinkScheme
		{
			return match ( $scheme_label )
			{
				self::label_http => LinkScheme::HTTP,
				
				self::label_ftp  => LinkScheme::FTP,
				
				self::label_php  => LinkScheme::PHP,
				
				self::label_data => LinkScheme::DATA,
				
				default => LinkScheme::NONE,
			};
			
		}
		
		const label_http = 'http';
		
		const label_ftp = 'ftp';
		
		const label_php = 'php';
		
		const label_data = 'data';
	}

?>