<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/10/8
 * Time: 下午 11:47
 */
interface IMethodHolder
{
    public function getInfo($info);

    public function sendInfo($info);

    public function calculate($first, $second);
}