<?php
    namespace IOJaegers\Hrbf;
    require_once './vendor/autoload.php';

    use IOJaegers\Hrbf\Text\Strings\StringTransformer;
    use IOJaegers\Hrbf\globals\Configuration;
    use IOJaegers\Hrbf\Types\StringAlgorithmType;

    Configuration::setStringAlgorithm(StringAlgorithmType::Multibyte );
    Configuration::setMultibyteAllowed(true);

    print(StringTransformer::Lower('LOWER'));
    echo "\r\n";

    print(StringTransformer::Upper("upper"));
    echo "\r\n";
	
	print_r(parse_url("https://commons.wikimedia.org/wiki/File:8,_Physics_and_Chemistry,_Rybners_Teknisk_Gymnasium,_Esbjerg.jpg"));
?>