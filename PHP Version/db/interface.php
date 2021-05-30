<?php
require_once "link.php";

function header_menu()
{
    global $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`header_menu`");
    $menu = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $menu;
}
function header_icon()
{
    global $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`header_icon`");
    $icon = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $icon;
}
function page_slider()
{
    global $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`page_slider`");
    $slider = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $slider;
}
function select_categories()
{
    global $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`categories`");
    $categories = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $categories;
}

function footer_icons()
{
    global $link;
    $res = mysqli_query($link,"SELECT * FROM `megashop`.`footer_icon`");
    $icons = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $icons;
}