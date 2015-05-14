<?php
/**
 * Created by PhpStorm.
 * User: luzy
 * Date: 15/5/14
 * Time: 下午5:18
 */

require './vendor/autoload.php';

use Lottery\Lottery;
use Lottery\Item;

$Lottery = new Lottery();
$Lottery->addItem(
    new Item(
        'beijing',
        10
    )
);
$Lottery->addItem(
    new Item(
        'jinan',
        20
    )
);
$Lottery->addItem(
    new Item(
        'shanghai',
        70
    )
);

echo $Lottery->run();