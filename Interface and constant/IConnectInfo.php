<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/10
 * Time: 下午 02:43
 */
interface IConnectInfo
{
    const   HOST = "localhost";
    const   USERNAME = "root";
    const   DBNAME = "cms";
    const   PW = "q1w2e3r4";

    function testConnection();
}