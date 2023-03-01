<?php
  namespace testPhp\core\User\inetactors;

  //Get the user id from the url

  $user_id = $_GET['user_id'];

  echo $user_id;

  // $user = new GetUserById($user_id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="/testphp/CreateUserController.php" method="POST">

    <!-- <input type="user_id" name="user_id" value="<?php echo $user['id'] ?>"> -->

    Nombre: <input type="text" name="user_name"> <br>
    Correo: <input type="text" name="email"> <br>
    Telefono: <input type="text" name="phone"> <br>

    <button>Crear</button>

  </form>

</body>
</html>