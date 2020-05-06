<?php

require "client.php";
$esClient = getEsClient();
$indexName = "test_es_version";
$params = [
    "index" => $indexName,
    "body" => [
        "settings"=>[
            'number_of_shards' => 3,
            'number_of_replicas' => 1
        ],
        "mappings" => [
            "properties" => [
                "id" => ["type" => "integer"],
                "uuid" => ["type" => "keyword"],
                "content" => ["type"=>"text","analyzer" => "ik_smart"],
                "gender" => ["type" => "byte"]
            ]
        ]
    ]
];

$ret = $esClient->indices()->create($params);

//$ret = $esClient->indices()->exists(["index"=>$indexName]);
var_dump($ret);
//die;
