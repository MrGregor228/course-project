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
