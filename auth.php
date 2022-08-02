<?php

    require_once 'config.php';

    class Auth extends Database{
        // Register new user
        public function register($name, $email, $password){
            $sql = "INSERT INTO users (fullname, email, password) VALUES (:name, :email, :password)";
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['name'=>$name, 'email' => $email, 'password'=>$password]);
            return true;
        }

        //Check if user already registered
        public function userExist($email){
            $sql = "SELECT email FROM users WHERE email = :email";
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            return $res;
        }
    }
?>