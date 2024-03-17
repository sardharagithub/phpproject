<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
$attr=get_safe_value($_POST['attt']);
$qty=get_safe_value($_POST['qty']);
$type=get_safe_value($_POST['type']);

if($type=='add')
{
    if(isset($_SESSION['FOOD_FRONT_USER']))
    {

    }
    else
    {
            $_SESSION['cart'][$attr]['qty']=$qty;  
    }

}


?>