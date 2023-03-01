<?php

namespace testPhp\core\User\inetactors;

use testPhp\core\User\repository\UserRepository;

include 'core/User/repository/User.repository.php';

class DeleteUser
{

  private $user_id;

  private $userRepository;

  public function __construct($user_id)
  {
    $this->user_id = $user_id;
    $this->userRepository = new UserRepository();
  }

  public function execute()
  {
    $user = $this->userRepository->deleteUser($this->user_id);
    return $user;
  }
}
