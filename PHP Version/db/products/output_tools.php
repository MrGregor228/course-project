<?php
require_once "db/link.php";
function  output_tools()
{
    global  $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`products` ORDER BY RAND() LIMIT 6");
    $tools = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $tools;
} 


output_tools();