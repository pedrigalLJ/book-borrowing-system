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

        //Login existing user
        public function login($email){
            $sql = 'SELECT email, password FROM users WHERE email = :email AND deleted != 1';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        //Current user in session
        public function currentUser($email){
            $sql = 'SELECT * FROM users WHERE email = :email AND deleted != 1';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }
    }
?>