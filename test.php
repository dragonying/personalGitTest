<?php
// function calc()
// {
//     //获取参数个数
//     $count = func_num_args();
//     //获取所有的参数
//     $args = func_get_args();

//     if ($count == 0) {
//         return null;
//     } else if ($count == 1) {
//         return $args[0];
//     } else if ($count == 2) {
//         return $args[0] * $args[1];
//     } else {
//         $ret = $args[0] * $args[1];
//         for ($i = 2; $i < $count; $i++) {
//             $ret += $args[$i];
//         }
//         return $ret;
//     }
// }

// echo calc(1, 2, 3, 4);

// echo getcwd() .PHP_EOL;
// echo __FILE__ .PHP_EOL;
// echo __DIR__ .PHP_EOL;
error_reporting(E_ALL);
ini_set('html_errors', 0);
ini_set('docref_root', "https://secure.php.net/manual/zh/");

include("a2.php"); //E_WARNING
doc_root
user_dir