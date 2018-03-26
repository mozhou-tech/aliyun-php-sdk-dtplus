<?php
//ini_set('display_errors','ERROR');
require_once '../src/Config.php';

use Dtplus\DataplusClient;
use PHPUnit\Framework\TestCase;

class MetricTest extends TestCase
{

    protected $ak_id;

    protected $ak_secret;

    protected $dplusOrgCode;

    public function setUp()
    {
        parent::setUp();
        $this->ak_id = 'LTAIsk0qFRkhyL2Q';      // 改成你的AccessKeyId
        $this->ak_secret = 'xi7FP7EFafFV3CNUO0G2HAOzvSRAPi';   // 改成你的 AccessKeySecret
        $this->dplusOrgCode = 'dt_ng_1435638266713387';     // 改成你的 dplusOrgCode
    }

    function testUpdatelog()
    {
        $request = new Dtplus\Request\UploadlogRequest();
        $logs = array(
            json_encode(array("action" => "login", "user_id" => "0", "tags" => "{'age':'1','gender':'1'}")),
            json_encode(array("action" => "item", "item_id" => "1", "category" => "1")),
            json_encode(array("action" => "click", "user_id" => "0", "item_id" => "0")),
        );
        $client = new DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setBusinessName('recommend');
        $request->setCustomerName('movie_recommend');
        $request->setToken('alidata91c57337f6d0d84f677d2e3ac');
        $request->setContent($logs);
        $response = json_decode($client->getResponse($request));
        $this->assertEquals(1, $response->success);
    }

    function testDoRec()
    {
        $request = new Dtplus\Request\DoRecRequest();
        $client = new DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setBizCode('movie_recommend');
        $request->setScnCode('Movie_recommend');
        $request->setRecnum('10');
        $response = json_decode($client->getResponse($request));
        $this->assertEquals('SUCCESS', $response->code, $response->message);
    }

    function testEtl()
    {
        $request = new Dtplus\Request\EtlRequest();
        $client = new DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setBizCode('movie_recommend');
        $request->setDs("");
        $response = json_decode($client->getResponse($request));
        $this->assertEquals('SUCCESS', $response->code, $response->message);
    }

    function testTask()
    {
        $request = new Dtplus\Request\TasksRequest();
        $client = new Dtplus\DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setBizCode('movie_recommend');
        $request->setDs("");
        $request->setScnCode("Movie_recommend");
        $request->setContainImport(true);
        $response = json_decode($client->getResponse($request));
        $this->assertEquals('SUCCESS', $response->code, $response->message);
    }

    function testStatus()
    {
        $request = new Dtplus\Request\StatusRequest();
        $client = new Dtplus\DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setTaskId('63469');
        $response = json_decode($client->getResponse($request));
        $this->assertEquals('SUCCESS', $response->code, $response->message);
    }

    function testIndex()
    {
        $request = new Dtplus\Request\IndexRequest();
        $client = new Dtplus\DataplusClient($this->ak_id, $this->ak_secret, $this->dplusOrgCode);
        $request->setBizCode('movie_recommend');
        $request->setDs("");
        $response = json_decode($client->getResponse($request));
        $this->assertEquals('SUCCESS', $response->code, $response->message);
    }
}




# export http_proxy=http://127.0.0.1:8888

