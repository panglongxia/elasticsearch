<?php
require "client.php";
$esClient = getEsClient();
$indexName = "test_es_version";

//插入
$params = [
    "index" => $indexName,
    'body' => getData()
];
$ret = $esClient->index($params);


// 批量写入
//$items = [getData(),getData()];
//foreach ($items as $item){
//    $data['body'][] = [
//        'create' => [
//            '_index' => $indexName,
//            '_id' => $item['uuid']
//        ]
//    ];
//    $data['body'][] = $item;
//}
//$ret = $esClient->bulk($data);


//修改
//$params = [
//    'index' => $indexName,
//    'id' => '202005061044398747410',
//    'body' => ['doc' => ['content' => '我是你爸爸']]
//];
//$ret = $esClient->update($params);


// 删除
//$params = [
//    'index' => $indexName,
//    'id' => '202005061044398747410'
//];
//$ret = $esClient->delete($params);
var_dump($ret);
