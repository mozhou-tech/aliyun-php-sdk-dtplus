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
 * Data Preprocessing Task
 *
 * Class EtlRequest
 * @package Dtplus\Request\V20180110
 */
class EtlRequest extends \RpcAcsRequest
{

    private $bizCode;

    private $ds;

    public $path = "/re/etl";

	function  __construct()
	{
		parent::__construct("Dtplus", "2018-01-10", "Etl", "dtplus", "openAPI");
		$this->setMethod("POST");
        $this->addHeader("x-dataplus-timeout","60000");
	}


    public function getBizCode(){
        return $this->bizCode;
    }


    public function setBizCode($bizCode){
        $this->bizCode = $bizCode;
        $this->content["bizCode"] = $bizCode;
    }


    public function getDs(){
        return $this->ds;
    }


    public function setDs($ds){
        $this->ds = $ds;
        $this->content["ds"] = $ds;
    }

}