<?php
	/**
	 *
	 */
    namespace IOJaegers\HRBF\Network\URI\Objects;


	/**
	 *
	 */
    class ServerQuery
    {
        /**
         * @param string|null $path
         * @param string|null $query
         * @param string|null $fragment
         */
        function __construct(
            ?string $path = null,
            ?string $query = null,
            ?string $fragment = null
        )
        {
			$this->setPath(
                $path
            );

            $this->setQuery(
                $query
            );

            $this->setFragment(
                $fragment
            );
        }
	
		/**
		 *
		 */
        function __destruct()
        {
			if( $this->isPathSet() )
			{
				$this->deletePath();
			}
			
			if( $this->isFragmentSet() )
			{
				$this->deleteFragment();
			}

			if( $this->isQuerySet() )
			{
				$this->deleteQuery();
			}
        }


		// Variables
		private ?string $path = null;
		private ?string $query = null;
		private ?string $fragment = null;

	
		// Accessors
		/**
		 * @return string|null
		 */
		public final function getFragment(): ?string
		{
			return $this->fragment;
		}
	
		/**
		 * @param string|null $fragment
		 */
		public final function setFragment(
			?string $fragment
		): void
		{
			$this->fragment = $fragment;
		}
	
		/**
		 * @return void
		 */
		public final function deleteFragment(): void
		{
			unset(
				$this->fragment
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isFragmentNull(): bool
		{
			return is_null(
				$this->fragment
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isFragmentSet(): bool
		{
			return isset(
				$this->fragment
			);
		}
	
		/**
		 * @return string|null
		 */
		public final function getPath(): ?string
		{
			return $this->path;
		}
	
		/**
		 * @param string|null $path
		 */
		public final function setPath(
			?string $path
		): void
		{
			$this->path = $path;
		}
		
		public final function deletePath(): void
		{
			unset(
				$this->path
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isPathNull(): bool
		{
			return is_null(
				$this->path
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isPathSet(): bool
		{
			return isset(
				$this->path
			);
		}
	
		/**
		 * @return string|null
		 */
		public final function getQuery(): ?string
		{
			return $this->query;
		}
	
		/**
		 * @param string|null $query
		 */
		public final function setQuery(
			?string $query
		): void
		{
			$this->query = $query;
		}
		
		public final function deleteQuery(): void
		{
			unset(
				$this->query
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isQueryNull(): bool
		{
			return is_null(
				$this->query
			);
		}
	
		/**
		 * @return bool
		 */
		public final function isQuerySet(): bool
		{
			return isset(
				$this->query
			);
		}
	}
?>