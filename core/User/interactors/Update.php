<?php

namespace testPhp\core\User\inetactors;

use testPhp\core\User\repository\UserRepository;

include 'core/User/repository/User.repository.php';

class UpdateUser
{

  private $userRepository;
  private int $user_id;
  private $user;

  public function __construct(int $user_id, $user)
  {
    $this->userRepository = new UserRepository();
    $this->user_id = $user_id;
    $this->user = $user;
  }

  public function execute()
  {
    $user = $this->userRepository->updateUser($this->user_id, $this->user);
  }
}
