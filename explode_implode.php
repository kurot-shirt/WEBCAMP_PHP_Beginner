<?php

$base_string = "stollen;panettone;pandora;kouglof;LusseKatter";
echo "元の文字列 \n";
var_dump($base_string);

$exploded_array = explode(";", $base_string);
echo "\n explode した配列 \n";
var_dump($exploded_array);

$imploded_string = implode(",", $exploded_array);
echo "\n implodeで繋げた文字列 \n";
var_dump($imploded_string);