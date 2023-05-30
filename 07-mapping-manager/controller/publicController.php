<?php

use model\Theuser;

$user1 = new Theuser([]);
$user2 = new Theuser(['idTheUser'=>3, 'loginTheUser'=> "saucisse", 'pwdTheUser'=>'lolololo', 'mailTheUser'=>'info@bite.com']);


var_dump($user1, $user2);