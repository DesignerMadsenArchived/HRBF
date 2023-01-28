<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Network\URI\Objects\States;
	
	
	/**
	 *
	 */
	enum SecureConnectionState
	{
		/**
		 *
		 */
		case SECURE;
		
		/**
		 *
		 */
		case UNSECURE;
		
		/**
		 *
		 */
		case UNSUPPORTED;
		
		/**
		 *
		 */
		case NONE;
	}
?>