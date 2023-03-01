<?php

namespace testPhp\core\User\inetactors;

use testPhp\core\User\repository\UserRepository;
include 'core/User/repository/User.repository.php';

class CreateUser {

    private $userRepository;
    private $userData;

    public function __construct($userData) {
        $this->userRepository = new UserRepository();
        $this->userData = $userData;
    }

    public function execute() {
        $user = $this->userRepository->createUser($this->userData);
        return $user;
    }

}