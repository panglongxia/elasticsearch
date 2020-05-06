<?php

require "client.php";
$esClient = getEsClient();
$indexName = "test_es_version";

$body = [

];
$params = [
    'index' => $indexName,
    'body' => $body
];

//$ret = $esClient->search($params);
$ret = $esClient->count($params);
var_dump($ret);