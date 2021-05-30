<?php
require_once "link.php";
function  output_products()
{
    global  $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`products`");
    $tools = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $tools;
} 

function  output_categories()
{
    global  $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`categories`");
    $categories= mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $categories;
} 
function  check_id()
{
    global  $link;
    $res = mysqli_query($link,"SELECT `check_id` FROM `megashop`.`categories`");
    $categories= mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $categories;
} 
function  categories()
{
    global  $link;
    $res = mysqli_query($link,"SELECT `id` FROM `megashop`.`categories`");
    $categories= mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $categories;
} 