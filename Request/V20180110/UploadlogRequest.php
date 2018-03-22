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
 * Log Upload
 *
 * Class UploadlogRequest
 * @package Dtplus\Request\V20180110
 */
class UploadlogRequest extends \RpcAcsRequest
{


    private $businessName;

    private $customerName;

    private $token;

    public $path = "/re/uploadlog";


	function  __construct()
	{
		parent::__construct("Dtplus", "2018-01-10", "Uploadlog", "dtplus", "openAPI");
		$this->setMethod("POST");
	}


    public function getBusinessName(){
        return $this->businessName;
    }


    public function setBusinessName($businessName){
        $this->businessName = $businessName;
        $this->queryParameters["businessName"] = $businessName;
    }


    public function getCustomerName(){
        return $this->customerName;
    }


    public function setCustomerName($customerName){
        $this->customerName = $customerName;
        $this->queryParameters["customerName"] = $customerName;
    }


    public function getToken(){
        return $this->token;
    }


    public function setToken($token){
        $this->token = $token;
        $this->queryParameters["token"] = $token;
    }
	
}