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
 * Recommend
 *
 * Class DoRecRequest
 * @package Dtplus\Request\V20180110
 */
class DoRecRequest extends \RpcAcsRequest
{


    private $bizCode;

    private $scnCode;

    private $userId;

    private $itemId;

    private $category;

    private $class;

    private $recnum;

    private $start;

    public $path = "/re/doRec";


	function  __construct()
	{
        parent::__construct("Dtplus", "2018-01-10", "DoRec", "dtplus", "openAPI");
		$this->setMethod('GET');
	}

	public function getBizCode(){
	    return $this->bizCode;
    }


    public function setBizCode($bizCode){
        $this->bizCode = $bizCode;
        $this->queryParameters["bizCode"] = $bizCode;
    }


    public function getScnCode(){
        $this->scnCode;
    }


    public function setScnCode($scnCode){
        $this->scnCode = $scnCode;
        $this->queryParameters["scnCode"] = $scnCode;
    }


    public function getUserId(){
        $this->userId;
    }


    public function setUserId($userId){
        $this->userId = $userId;
        $this->queryParameters["userId"] = $userId;
    }


    public function getItemId(){
        $this->userId;
    }


    public function setItemId($itemId){
        $this->itemId = $itemId;
        $this->queryParameters["itemId"] = $itemId;
    }


    public function getCategory(){
        $this->category;
    }


    public function setCategory($category){
        $this->category = $category;
        $this->queryParameters["category"] = $category;
    }


    public function getClass(){
        $this->class;
    }


    public function setClass($class){
        $this->class = $class;
        $this->queryParameters["class"] = $class;
    }


    public function getRecnum(){
        $this->recnum;
    }


    public function setRecnum($recnum){
        $this->recnum = $recnum;
        $this->queryParameters["recnum"] = $recnum;
    }


    public function getStart(){
        $this->start;
    }


    public function setStart($start){
        $this->recnum = $start;
        $this->queryParameters["start"] = $start;
    }

}