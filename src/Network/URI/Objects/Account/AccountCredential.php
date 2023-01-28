<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects\Account;


	/**
	 *
	 */
    class AccountCredential
    {
		/**
		 * @param string|null $username
		 * @param string|null $password
		 */
        function __construct(
			?string $username = null,
			?string $password = null
		)
        {
			$this->setUsername(
				$username
			);
			
			$this->setPassword(
				$password
			);
        }
	
		/**
		 *
		 */
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
		public final function getPassword(): ?string
		{
			return $this->password;
		}
	
		/**
		 * @return string|null
		 */
		public final function getUsername(): ?string
		{
			return $this->username;
		}
	
		/**
		 * @param string|null $password
		 */
		public final function setPassword(
			?string $password
		): void
		{
			$this->password = $password;
		}
	
		/**
		 * @param string|null $username
		 */
		public final function setUsername(
			?string $username
		): void
		{
			$this->username = $username;
		}
	
		/**
		 * @return bool
		 */
		public final function isUsernameNull(): bool
		{
			return is_null(
                $this->username
            );
		}
	
		/**
		 * @return bool
		 */
		public final function isPasswordNull(): bool
		{
			return is_null(
                $this->password
            );
		}
	
		/**
		 * @return bool
		 */
		public final function isPasswordSet(): bool
		{
			return isset(
				$this->password
			);
		}
		
	
		/**
		 * @return bool
		 */
		public final function isUsernameSet(): bool
		{
			return isset(
				$this->username
			);
		}
	}
?>