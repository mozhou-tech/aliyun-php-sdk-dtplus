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

namespace Dtplus;


class Request
{
    protected $headers = array();
    protected $queryParameters;
    protected $method;
    protected $path;
    protected $content;
    protected $protocol;

    public function __construct($product, $version, $actionName, $locationServiceCode = null, $locationEndpointType = "openAPI")
    {
        $this->headers["x-sdk-client"] = "php/2.0.0";
        $this->protocol = 'http';
    }

    public function setMethod($method){
        $this->method = $method;
    }

    public function setProtocol($protocol){
        $this->protocol = $protocol;
    }

    public function setPath($path){
        $this->path = $path;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getMethod(){
        return $this->method;
    }

    public function getQueryParameters(){
        return $this->queryParameters;
    }


    public function getProtocol(){
        return $this->protocol;
    }

    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

}