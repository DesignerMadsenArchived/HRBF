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
		public final function convertToType(
			string $scheme_label
		): LinkScheme
		{
			return match (
				$this->normaliseValue(
					$scheme_label
				)
			)
			{
				self::label_expect 	=> LinkScheme::EXPECT,
				self::label_ftp 	=> LinkScheme::FTP,
				self::label_glob 	=> LinkScheme::GLOB,
				self::label_http 	=> LinkScheme::HTTP,
				self::label_phar 	=> LinkScheme::PHAR,
				self::label_php  	=> LinkScheme::PHP,
				self::label_data 	=> LinkScheme::DATA,
				self::label_zlib 	=> LinkScheme::ZLIB,
				self::label_ssh2 	=> LinkScheme::SSH2,
				self::label_rar 	=> LinkScheme::RAR,
				self::label_ogg 	=> LinkScheme::OGG,
				
				default 			=> LinkScheme::NONE,
			};
		}
		
		/**
		 * @param LinkScheme $linkScheme
		 * @return string
		 */
		public final function convertToString(
			LinkScheme $linkScheme
		): string
		{
			return match(
				$linkScheme
			)
			{
				LinkScheme::EXPECT 	=> self::label_expect,
				LinkScheme::FTP 	=> self::label_ftp,
				LinkScheme::GLOB 	=> self::label_glob,
				LinkScheme::HTTP 	=> self::label_http,
				LinkScheme::PHAR 	=> self::label_phar,
				LinkScheme::PHP 	=> self::label_php,
				LinkScheme::DATA 	=> self::label_data,
				LinkScheme::ZLIB 	=> self::label_zlib,
				LinkScheme::SSH2 	=> self::label_ssh2,
				LinkScheme::RAR 	=> self::label_rar,
				LinkScheme::OGG 	=> self::label_ogg,
				
				default 			=> 'none',
			};
		}
		
		/**
		 * @param string $value
		 * @return string
		 */
		protected function normaliseValue(
			string $value
		): string
		{
			return strtolower(
				$value
			);
		}
		
		// Constants
		private const label_http 	= 'http';
		private const label_ftp 	= 'ftp';
		private const label_zlib 	= 'zlib';
		private const label_data 	= 'data';
		private const label_glob 	= 'glob';
		private const label_phar 	= 'phar';
		private const label_php 	= 'php';
		private const label_ssh2 	= 'ssh2';
		private const label_rar 	= 'rar';
		private const label_ogg 	= 'ogg';
		private const label_expect 	= 'expect';
	}
?>