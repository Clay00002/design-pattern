<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/8
 * Time: 下午 10:42
 */
class TellAll
{

    private $userAgent;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }
}

$tellAll = new TellAll();