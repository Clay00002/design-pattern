<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/10
 * Time: 下午 02:58
 */
include_once('IConnectInfo.php');

class ConSQL implements IConnectInfo
{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::USERNAME;
    private $pass = IConnectInfo::PW;

    public function testConnection()
    {
        $hookup = new mysqli($this->serve, $this->user, $this->pass, $this->currentDB);

        if (mysqli_connect_error()) {
            die('bad mojo');
        }

        print 'You are hooked up Ace ' . "<br />" . $hookup->host_info;

        $hookup->close();
    }
}

$useConstant = new ConSQL();
$useConstant->testConnection();