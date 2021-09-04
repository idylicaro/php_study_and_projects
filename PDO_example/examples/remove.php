<?php

require __DIR__ . "/../../vendor/autoload.php";

use Models\User;

$user = (new User())->findById(1);
if ($user){
    $user->destroy();
}
