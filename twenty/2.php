<?php
//header('Access-Control-Allow-Origin:*');
$arr = ['name'=>'xiaohua','age'=>'123'];
//echo  json_encode($arr);


echo 'fn(\''.json_encode($arr).'\')';