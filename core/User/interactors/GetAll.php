<?php

namespace testPhp\core\User\inetactors;

use testPhp\core\User\repository\UserRepository;

include 'core/User/repository/User.repository.php';

class GetUsers
{


  private UserRepository $userRepository;

  public function __construct( )
  {
    $this->userRepository = new UserRepository();
  }

  public function execute()
  {
    $user = $this->userRepository->getUsers();
    return $user;
  }
}
