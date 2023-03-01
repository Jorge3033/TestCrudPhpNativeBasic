<?php

use testPhp\core\User\inetactors\GetUsers;
include 'core/User/interactors/GetAll.php';

  $users = new GetUsers();
  $usersData = $users->execute();

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

  <nav>
    <ul>
      <li>
        <a href="/testPhp/datasources/views/CreateUser.view.php"> Crear usuario</a>
      </li>
    </ul>
  </nav>

  <h2>Registros</h2>

  <table>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
    
    <tbody>
      <?php foreach ($usersData as $user) { ?>
        <tr>
          <td><?php echo $user['name'] ?></td>
          <td><?php echo $user['email'] ?></td>
          <td><?php echo $user['phone'] ?></td>
          <td>
            <a href="/testPhp/datasources/views/EditUser.view.php?user_id=<?php echo $user['id'] ?>">Editar</a>
            
            <form action="/testphp/DeleteUserController.php" method="POST">
              <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
              <input type="submit" value="Eliminar">
            </form>
            
          </td>
        </tr>
      <?php } ?>
    </tbody>

  </table>

</body>
</html>