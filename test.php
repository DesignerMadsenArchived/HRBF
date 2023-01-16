<?php
    namespace IOJaegers\Hrbf;
    require_once './vendor/autoload.php';

    use IOJaegers\Hrbf\StringTransformer;
    use IOJaegers\Hrbf\globals\Configuration;
    use IOJaegers\Hrbf\types\StringAlgorithmType;

    Configuration::setStringAlgorithm(StringAlgorithmType::Multibyte );
    Configuration::setMultibyteAllowed(true);

    print(StringTransformer::Lower('LOWER'));
    echo "\r\n";

    print(StringTransformer::Upper("upper"));
    echo "\r\n";
?>