<?php
	/**
	 *
	 */
	namespace IOJaegers\HRBF\Network\IPAddresses;
	
	/**
	 *
	 */
    class IPv6Address
    {
        public function __construct(  )
        {
			
        }

        /**
         *
         */
        function __destruct()
        {

        }

        // Variables
		const seperator = ':';

        private ?string $s1 = null;
		
        private ?string $s2 = null;
        
		private ?string $s3 = null;
  
		private ?string $s4 = null;
		
		
		private ?string $s5 = null;
		
		private ?string $s6 = null;
	
	
		// Accessors
		/**
		 * @return string|null
		 */
		public function getS1(): ?string
		{
			return $this->s1;
		}
	
		/**
		 * @return string|null
		 */
		public function getS2(): ?string
		{
			return $this->s2;
		}
	
		/**
		 * @return string|null
		 */
		public function getS3(): ?string
		{
			return $this->s3;
		}
	
		/**
		 * @return string|null
		 */
		public function getS4(): ?string
		{
			return $this->s4;
		}
	
		/**
		 * @return string|null
		 */
		public function getS5(): ?string
		{
			return $this->s5;
		}
	
		/**
		 * @return string|null
		 */
		public function getS6(): ?string
		{
			return $this->s6;
		}
	
		/**
		 * @param string|null $s1
		 */
		public function setS1(?string $s1): void
		{
			$this->s1 = $s1;
		}
	
		/**
		 * @param string|null $s2
		 */
		public function setS2(?string $s2): void
		{
			$this->s2 = $s2;
		}
	
		/**
		 * @param string|null $s3
		 */
		public function setS3(?string $s3): void
		{
			$this->s3 = $s3;
		}
	
		/**
		 * @param string|null $s4
		 */
		public function setS4(?string $s4): void
		{
			$this->s4 = $s4;
		}
	
		/**
		 * @param string|null $s5
		 */
		public function setS5(?string $s5): void
		{
			$this->s5 = $s5;
		}
	
		/**
		 * @param string|null $s6
		 */
		public function setS6(?string $s6): void
		{
			$this->s6 = $s6;
		}
		
		
		// Object
		/**
		 * @return string
		 */
        public function toString(): string
        {
            return '';
        }
    }
?>