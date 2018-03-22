<?php
//ini_set('display_errors','ERROR');
include_once '../src/Autoloader.php';
use Dtplus\DataplusClient;
use Dtplus\DoRecRequest;
use Dtplus\EtlRequest;

$ak_id = 'LTAIsk0qFRkhyL2Q';
$ak_secret = 'xi7FP7EFafFV3CNUO0G2HAOzvSRAPi';
$dplusOrgCode = 'dt_ng_1435638266713387';

function testUpdatelog(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new Dtplus\UploadlogRequest();
    $logs = array(
        json_encode(array("action" => "login", "user_id" => "0", "tags" =>"{'age':'1','gender':'1'}")),
        json_encode(array("action" => "item", "item_id" => "1", "category" =>"1")),
        json_encode(array("action" => "click", "user_id" => "0", "item_id" =>"0")),
    );
    $client = new DataplusClient($ak_id, $ak_secret,$dplusOrgCode);
    $request->setBusinessName('recommend');
    $request->setCustomerName('movie_recommend');
    $request->setToken('alidata91c57337f6d0d84f677d2e3ac');
    $request->setContent($logs);
    $response = $client->getResponse($request);
    print_r($response);
}

function testDoRec(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new DoRecRequest();
    $client = new DataplusClient($ak_id, $ak_secret, $dplusOrgCode);
    $request->setBizCode('movie_recommend');
    $request->setScnCode('Movie_recommend');
    $request->setRecnum('10');
    $response = $client->getResponse($request);
    print_r($response);
}

function testEtl(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new EtlRequest();
    $client = new DataplusClient($ak_id, $ak_secret, $dplusOrgCode);
    $request->setBizCode('movie_recommend');
    $request->setDs("");
    $response = $client->getResponse($request);
    print_r($response);
}

function testTask(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new Dtplus\TasksRequest();
    $client = new Dtplus\DataplusClient($ak_id, $ak_secret, $dplusOrgCode);
    $request->setBizCode('movie_recommend');
    $request->setDs("");
    $request->setScnCode("Movie_recommend");
    $request->setContainImport(true);
    $response = $client->getResponse($request);
    print_r($response);
}

function testStatus(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new Dtplus\StatusRequest();
    $client = new Dtplus\DataplusClient($ak_id, $ak_secret, $dplusOrgCode);
    $request->setTaskId('63469');
    $response = $client->getResponse($request);
    print_r($response);
}

function testIndex(){
    global $ak_id;
    global $ak_secret;
    global $dplusOrgCode;
    $request = new Dtplus\IndexRequest();
    $client = new Dtplus\DataplusClient($ak_id, $ak_secret, $dplusOrgCode);
    $request->setBizCode('movie_recommend');
    $request->setDs("");
    $response = $client->getResponse($request);
    print_r($response);
}
echo "\ntesting doRec\n";
testDoRec();
echo "\ntesting Updatelog\n";
testUpdatelog(); //pass
echo "\ntesting Etl\n";
testEtl();
echo "\ntesting Task\n";
testTask();
echo "\ntesting Status\n";
testStatus();
echo "\ntesting Index\n";
testIndex();
echo "\n";



# export http_proxy=http://127.0.0.1:8888

