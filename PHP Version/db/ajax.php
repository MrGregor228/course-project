<?php
require_once "../db/product.php";
$checkboxe = check_id();
$categoris = categories();
if (isset($_POST['$checkboxe']) && 
$_POST['$checkboxe'] == 'Yes')
{
    global  $link;
    $res = mysqli_query($link,"SELECT * FROM products INNER JOIN categories WHERE products.category_id=categories.id");
    $categories= mysqli_fetch_all($res,MYSQLI_ASSOC);

}
var_dump($categories);