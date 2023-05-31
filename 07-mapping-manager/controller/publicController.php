<?php

use model\Theuser;
use model\TheuserManager;
use PDO;

if(isset($_GET['user']))
{
    $user1 = new Theuser([]);
    $user2 = new Theuser(['idTheUser'=>3, 'loginTheUser'=> "saucisse", 'pwdTheUser'=>'lolololo', 'mailTheUser'=>'info@bite.com']);

    $user = new TheuserManager($pdo);
    $userAll = $user -> getAllUser();
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
