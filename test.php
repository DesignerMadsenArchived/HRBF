<?php
    require_once './vendor/autoload.php';


    use IOJaegers\Hrbf\Network\URI\Objects\SubdomainList;
    use \IOJaegers\Hrbf\Network\URI\Objects\Subdomain;


    $list = new SubdomainList();

    $list->insert(new Subdomain("subdomain"));

    print $list->toString() . "\r\n";

    // print_r($list);
?>