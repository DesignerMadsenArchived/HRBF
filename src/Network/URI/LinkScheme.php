<?php
	namespace IoJaegers\Hrbf\Network\URI;

	
	enum LinkScheme
	{
		case HTTP;
		
		case FTP;
		
		case PHP;
		
		case ZLIB;
		
		case DATA;
		
		case GLOB;
		
		case PHAR;
		
		case SSH2;
		
		case RAR;
		
		case OGG;
		
		case EXPECT;
	}
?>