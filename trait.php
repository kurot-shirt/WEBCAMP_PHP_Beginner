<?php

trait 部品
{
    public function トレイトのメソッド()
    {
        echo "トレイトのメソッド \n";
    }
}
class クラス名
{
    use 部品;

    public function クラスのメソッド()
    {
        echo "クラスのメソッド \n";
    }
}

$obj = new クラス名();
$obj->クラスのメソッド();
$obj->トレイトのメソッド();