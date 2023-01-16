<?php
    namespace IOJaegers\Hrbf;
    require_once './vendor/autoload.php';

    use IOJaegers\Hrbf\StringOperator;
    use IOJaegers\Hrbf\globals\Configuration;

    Configuration::setMultibyteAllowed(true );

    print(StringOperator::Upper("Test"));

    echo "\r\n";
?>