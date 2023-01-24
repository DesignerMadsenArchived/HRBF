<?php
	/**
	 *
	 */
	namespace IOJaegers\Hrbf\Timestamp;
	
	
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