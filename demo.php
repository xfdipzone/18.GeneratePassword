<?php
require 'GeneratePassword.class.php';

$rule = array(
    'letter' => 5, // 必须含有大小写字母
    'number' => 2, // 必须含有数字
    'special' => 2 // 必须含有特殊字符
);

$special = '!@#$%_-';

$obj = new GeneratePassword(8, 10, $rule, $special);
$passwords = $obj->batchGenerate();

echo implode('<br>', $passwords);
?>