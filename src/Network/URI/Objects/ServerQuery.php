<?php
	/**
	 *
	 */
    namespace IOJaegers\Hrbf\Network\URI\Objects;


	/**
	 *
	 */
    class ServerQuery
    {
		/**
		 *
		 */
        function __construct()
        {
			
        }
	
		/**
		 *
		 */
        function __destruct()
        {

        }
	
		// Variables
		private ?string $path = null;
		private ?string $query = null;
		private ?string $fragment = null;
	
		// Accessors
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
		public function getPath(): ?string
		{
			return $this->path;
		}
	
		/**
		 * @return string|null
		 */
		public function getQuery(): ?string
		{
			return $this->query;
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
		 * @param string|null $path
		 */
		public function setPath(
			?string $path
		): void
		{
			$this->path = $path;
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
	}
?>