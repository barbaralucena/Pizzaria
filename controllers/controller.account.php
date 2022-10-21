<?php
require("models/model.users.php");
$title="A sua conta";
require("views/view.account.php");

$modelUsers= new Users();
$user= $modelUsers-> getUsers();


?>