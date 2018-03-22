<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Dtplus\Request\V20180110;
/**
 * Status Query
 *
 * Class StatusRequestt
 * @package Dtplus\Request\V20180110
 */
class StatusRequest extends \RpcAcsRequest
{

    private $taskId;


    private $bizCode;


    private $ds;


    private $scnCode;


    private $taskType;


    public $path = "/re/status";

	function  __construct()
	{
		parent::__construct("Dtplus", "2018-01-10", "Status", "dtplus", "openAPI");
		$this->setMethod("GET");
	}

    public function getTaskId(){
        return $this->taskId;
    }


    public function setTaskId($taskId){
        $this->taskId = $taskId;
        $this->queryParameters["taskId"] = $taskId;
    }


    public function getBizCode(){
        return $this->bizCode;
    }


    public function setBizCode($bizCode){
        $this->bizCode = $bizCode;
        $this->queryParameters["bizCode"] = $bizCode;
    }


    public function getDs(){
        return $this->ds;
    }


    public function setDs($ds){
        $this->ds = $ds;
        $this->queryParameters["ds"] = $ds;
    }


    public function getScnCode(){
        $this->scnCode;
    }


    public function setScnCode($scnCode){
        $this->scnCode = $scnCode;
        $this->queryParameters["scnCode"] = $scnCode;
    }


    public function getTaskType(){
        $this->taskType;
    }


    public function setTaskType($taskType){
        $this->taskType = $taskType;
        $this->queryParameters["taskType"] = $taskType;
    }

}