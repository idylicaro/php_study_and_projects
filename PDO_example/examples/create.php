<?php

require __DIR__ . "/../../vendor/autoload.php";

use Models\User;
use Models\Address;

$user = new User();
$user->first_name = "Icaro";
$user->last_name = "Santos";
$user->genre = "M";
$user->save();

$addr = new Address();
$addr->add($user, "Nome da rua", "22b");
$addr->save();