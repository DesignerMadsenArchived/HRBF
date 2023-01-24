<?php
	/**
	 *
	 */
    namespace IoJaegers\Hrbf\Network\URI;


	/**
	 *
	 */
    class Link
    {
        function __construct()
        {

        }

        function __destruct()
        {

        }
		
		// Variables
		private ?string $scheme = null;
		
		private ?string $host = null;
		
		private ?int $port = null;
	
		private ?string $user = null;
		
		private ?string $pass = null;
	
		private ?string $path = null;
		
		private ?string $query = null;
		
		private ?string $fragment = null;
	
	
		/**
		 * @return string|null
		 */
		public function getFragment(): ?string
		{
			return $this->fragment;
		}
	
		/**
		 * @return string|null
		 */
		public function getHost(): ?string
		{
			return $this->host;
		}
	
		/**
		 * @return string|null
		 */
		public function getPass(): ?string
		{
			return $this->pass;
		}
	
		/**
		 * @return string|null
		 */
		public function getPath(): ?string
		{
			return $this->path;
		}
	
		/**
		 * @return int|null
		 */
		public function getPort(): ?int
		{
			return $this->port;
		}
	
		/**
		 * @return string|null
		 */
		public function getQuery(): ?string
		{
			return $this->query;
		}
	
		/**
		 * @return string|null
		 */
		public function getScheme(): ?string
		{
			return $this->scheme;
		}
	
	
		/**
		 * @return string|null
		 */
		public function getUser(): ?string
		{
			return $this->user;
		}
	
		/**
		 * @param string|null $fragment
		 */
		public function setFragment(
			?string $fragment
		): void
		{
			$this->fragment = $fragment;
		}
	
		/**
		 * @param string|null $host
		 */
		public function setHost(
			?string $host
		): void
		{
			$this->host = $host;
		}
	
		/**
		 * @param string|null $pass
		 */
		public function setPass(
			?string $pass
		): void
		{
			$this->pass = $pass;
		}
	
		/**
		 * @param string|null $path
		 */
		public function setPath(
			?string $path
		): void
		{
			$this->path = $path;
		}
	
		/**
		 * @param int|null $port
		 */
		public function setPort(
			?int $port
		): void
		{
			$this->port = $port;
		}
	
		/**
		 * @param string|null $query
		 */
		public function setQuery(
			?string $query
		): void
		{
			$this->query = $query;
		}
	
		/**
		 * @param string|null $scheme
		 */
		public function setScheme(
			?string $scheme
		): void
		{
			$this->scheme = $scheme;
		}
	
		/**
		 * @param string|null $user
		 */
		public function setUser(
			?string $user
		): void
		{
			$this->user = $user;
		}
	}
?>