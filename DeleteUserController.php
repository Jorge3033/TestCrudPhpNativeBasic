<?php
namespace testPhp\controllers\User;

use testPhp\core\User\inetactors\DeleteUser;
include 'core/User/interactors/Delete.php';

//Get Data by post
$user_id = $_POST['user_id'];


try {

  $createUser = new DeleteUser($user_id);
  $createUser->execute();
  header('Location: /testPhp/index.php');

} catch (\Exception $e) {
  echo $e->getMessage();
}



