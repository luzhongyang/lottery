<?php
/**
 * Created by PhpStorm.
 * User: luzy
 * Date: 15/5/14
 * Time: 下午5:30
 */

namespace Lottery;

class Item
{
    public $name;

    public $weight;

    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

}