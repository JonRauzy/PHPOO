<?php


if(isset($_GET['user']))
{
    require_once "../view/userView.php";
} 

elseif(isset($_GET['message']))
{
    require_once "../view/messageView.php";
}

else 
{
    require_once '../view/homeView.php';
}
