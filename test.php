<?php
    namespace IOJaegers\Hrbf;
    require_once './vendor/autoload.php';

    use IOJaegers\Hrbf\StringOperator;
    use IOJaegers\Hrbf\globals\Configuration;

    Configuration::setMultibyteAllowed(false );

    try
    {

        print(StringOperator::Lower("Test"));
    }
    catch (\ErrorException)
    {

    }

    echo "\r\n";
?>