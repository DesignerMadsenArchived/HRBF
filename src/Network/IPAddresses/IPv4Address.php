<?php
    namespace IOJaegers\Hrbf\Network\IPAddresses;


    class IPv4Address
    {
        public function __construct( int $ip1s,
									 int $ip2s,
									 int $ip3s,
									 int $ip4s )
        {
            $this->setS1( $ip1s );
            $this->setS2( $ip2s );
            $this->setS3( $ip3s );
            $this->setS4( $ip4s );
        }

        /**
         *
         */
        function __destruct()
        {

        }

        // Variables
        const seperator = '.';

        private ?int $s1 = null;
        private ?int $s2 = null;
        private ?int $s3 = null;
        private ?int $s4 = null;

		
        // Accessors
        /**
         * @return int|null
         */
        public final function getS1(): ?int
        {
            return $this->s1;
        }

        /**
         * @param int|null $s1
         */
        public final function setS1(?int $s1 ): void
        {
            $this->s1 = $s1;
        }

        /**
         * @return int|null
         */
        public final function getS2(): ?int
        {
            return $this->s2;
        }

        /**
         * @param int|null $s2
         */
        public final function setS2(?int $s2 ): void
        {
            $this->s2 = $s2;
        }

        /**
         * @return int|null
         */
        public final function getS3(): ?int
        {
            return $this->s3;
        }

        /**
         * @param int|null $s3
         */
        public final function setS3(?int $s3 ): void
        {
            $this->s3 = $s3;
        }

        /**
         * @return int|null
         */
        public final function getS4(): ?int
        {
            return $this->s4;
        }

        /**
         * @param int|null $s4
         */
        public final function setS4(?int $s4 ): void
        {
            $this->s4 = $s4;
        }

        public function toString(): string
        {
            return '';
        }
    }
?>