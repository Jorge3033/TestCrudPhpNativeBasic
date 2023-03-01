<?php
namespace testPhp\controllers\User;

use testPhp\core\User\inetactors\CreateUser;
include 'core/User/interactors/Create.php';

//Get Data by post
$userName = $_POST['user_name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];


$userData = [
  'name' => $userName,
  'email' => $userEmail,
  'phone' => $userPhone
];

try {

  $createUser = new CreateUser($userData);
  $createUser->execute();
  header('Location: /testPhp/index.php');

} catch (\Exception $e) {
  echo $e->getMessage();
}



