<?php

namespace testPhp\core\User\inetactors;

use testPhp\core\User\repository\UserRepository;

include 'core/User/repository/User.repository.php';

class GetUserById
{

  private int $user_id;

  private UserRepository $userRepository;

  public function __construct( int $user_id )
  {
    $this->user_id = $user_id;
    $this->userRepository = new UserRepository();
  }

  public function execute()
  {
    $user = $this->userRepository->getUser($this->user_id);
    return $user;
  }
}
