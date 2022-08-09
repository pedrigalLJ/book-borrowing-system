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

        //Forgot password
        public function reset($token, $email){
            $sql = 'UPDATE users SET token = :token, token_expire = DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE email = :email';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['token'=>$token, 'email'=>$email]);

            return true;
        }

        //Reset password user auth
        public function resetAuth($email, $token){
            $sql = 'SELECT id FROM users WHERE email = :email AND token = :token AND token != "" AND token_expire > NOW() AND deleted != 1';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['email'=>$email, 'token'=>$token]);

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        // Update new password
        public function newPassword($password, $email){
            $sql = 'UPDATE users SET token = "", password = :password WHERE email = :email AND deleted != 1';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['password'=>$password, 'email'=>$email]);

            return true;
        }

        //Update profile 
        public function updateProfile($name, $photo, $id){
            $sql = 'UPDATE users SET fullname = :name, photo = :photo WHERE id = :id AND deleted != 1'; 
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['name'=>$name, 'photo'=>$photo, ':id'=>$id]);

            return true;
        }

        //Change password
        public function changePassword($password, $id){
            $sql = 'UPDATE users SET password = :password WHERE id = :id AND deleted != 1';
            $stmt = $this->con->prepare($sql);
            $stmt->execute(['password'=>$password, 'id'=>$id]);

            return true;
        }
    }
?>