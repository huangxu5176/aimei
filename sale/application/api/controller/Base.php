<?php

namespace app\api\controller;

use think\Controller;

class Base extends Controller
{
    protected function initialize()
    {
        parent::initialize();
        header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Methods:GET, POST, PATCH, PUT, DELETE");
        header("Access-Control-Allow-Headers:Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With");
    
    }
}
