<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Timestamp;
	
	
	/**
	 * 
	 */
	enum TimestampType
	{
		/**
		 *
		 */
		case SystemTimestamp;
		
		/**
		 *
		 */
		case GregorianTimestamp;
		
		/**
		 *
		 */
		case CustomTimestamp;
	}
?>