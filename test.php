<?php
    namespace IOJaegers\Hrbf;
    require_once './vendor/autoload.php';

    use IOJaegers\Hrbf\StringTransformer;
    use IOJaegers\Hrbf\globals\Configuration;

    Configuration::setMultibyteAllowed( false );

    try
    {
        print(StringTransformer::Lower("Test"));
    }
    catch (\ErrorException)
    {

    }

    echo "\r\n";
?>