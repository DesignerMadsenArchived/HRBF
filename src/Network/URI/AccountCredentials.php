<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI;


	/**
	 *
	 */
    class AccountCredentials
    {
        function __construct(
			?string $username = null,
			?string $password = null
		)
        {

        }

        function __destruct()
        {

        }
		
		// Variables
		private ?string $username = null;
		
		private ?string $password = null;
	
		// Accessors
		/**
		 * @return string|null
		 */
		public function getPassword(): ?string
		{
			return $this->password;
		}
	
		/**
		 * @return string|null
		 */
		public function getUsername(): ?string
		{
			return $this->username;
		}
	
		/**
		 * @param string|null $password
		 */
		public function setPassword(?string $password): void
		{
			$this->password = $password;
		}
	
		/**
		 * @param string|null $username
		 */
		public function setUsername(?string $username): void
		{
			$this->username = $username;
		}
		
	}
?>