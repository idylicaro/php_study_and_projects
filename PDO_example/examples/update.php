<?php

require __DIR__ . "/../../vendor/autoload.php";

use Models\User;

$user = (new User())->findById(1);
$user->last_name = "dos Santos";
$user->save();
