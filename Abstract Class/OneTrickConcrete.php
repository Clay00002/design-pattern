<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/8
 * Time: 下午 11:28
 */

include_once('OneTrickAbstract.php');

class OneTrickConcrete
{

    public function trick($whatever)
    {
        $this->storeHere = "An abstract property";
        return $whatever . $this->storeHere;
    }
}

$worker = new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");