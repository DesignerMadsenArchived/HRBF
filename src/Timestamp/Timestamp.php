<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Timestamp;
	
	
	/**
	 * 
	 */
	class Timestamp
	{
		/**
		 *
		 */
		public function __construct()
		{
			$this->setType(
                TimestampType::SystemTimestamp
            );
		}

        public function __deconstruct()
        {
            unset(
                $this->type
            );
        }
		
		
		// Variables
		/**
		 * @var TimestampType|null
		 */
		private ?TimestampType $type = null;
		
		
		// Accessors
		/**
		 * @return TimestampType|null
		 */
		public final function getType(): ?TimestampType
		{
			return $this->type;
		}
		
		/**
		 * @param TimestampType|null $type
		 */
		public final function setType(
			?TimestampType $type
		): void
		{
			$this->type = $type;
		}
	}
?>