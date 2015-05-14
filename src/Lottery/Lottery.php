<?php

namespace Lottery;

class Lottery
{

    private $_items;

    public function run()
    {
        return $this->_items[rand(0, count($this->_items) - 1)]->name;
    }

    public function addItem(Item $item)
    {
        $this->_items[] = $item;
    }
}