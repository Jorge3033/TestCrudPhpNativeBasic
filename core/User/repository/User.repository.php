<?php

namespace testPhp\core\User\repository;

include 'datasources/database/conntection.php';
use testPhp\datasources\database\BDConnection;


class UserRepository {
  
    private $connection;

    public function __construct() {
        $connection = new BDConnection();
        $this->connection = $connection->connect();
    }

    public function createUser($user) {
        $query = "INSERT INTO users (name, email, phone) VALUES ('{$user['name']}', '{$user['email']}', '{$user['phone']}')";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function getUser($id) {
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->connection, $query);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    public function getUsers() {
        $query = "SELECT * FROM users";
        $result = mysqli_query($this->connection, $query);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $users;
    }

    public function updateUser($id, $user) {
        $query = "UPDATE users SET name = '{$user['name']}', email = '{$user['email']}', phone = '{$user['phone']}' WHERE id = {$id}";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = {$id}";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

}