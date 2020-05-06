<?php
include dirname(__DIR__)."/vendor/autoload.php";


/**
 * @return \PanglongxiaElasticsearch\Client
 */
function getEsClient()
{
    $builder = \PanglongxiaElasticsearch\ClientBuilder::create();
    $hosts7 = include "config.php";
    return $builder->setHosts($hosts7)->setRetries(10)->build();
}


function getData(){
    return [
        "id" => time(),
        "uuid" => date("YmdHis").rand(99999,9999999),
        "content" =>"我是你大爷，我是你二大爷，我要打野".rand(99999,9999999).rand(99999,9999999).rand(99999,9999999).rand(99999,9999999),
        "gender" => rand(0,2)
    ];
}