<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/8
 * Time: 下午 11:02
 */

ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);
include_once('MobileSniffer.php');

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo "Device = " . $this->mobSniff->findDevice() . "<br/>";
        echo "Browser = " . $this->mobSniff->findBrowser() . "<br/>";
    }
}

$trigger = new Client();

