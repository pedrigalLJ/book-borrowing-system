<?php 
    class Database{
        private $dsn = "mysql:host=localhost;dbname=book_borrowing_system_db";
        private $dbuser = "root";
        private $dbpass = "";

        public $con;

        //constructor
        public function __construct()
        {
            try{
                $this->con = new PDO($this->dsn, $this->dbuser, $this->dbpass);

                // echo 'Connected';

            }catch(PDOException $e){
                echo 'Error: '.$e->getMessage();
            }

            return $this->con;
        }

        //Checking input
        public function testInput($data){
            $data = trim($data); //remove whitespaces user inputted
            $data = stripslashes($data); //remove all slashes
            $data = htmlspecialchars($data); //remove all HTML special chars like &, <, >

            return $data;
        }

        //Display error and success message alert
        public function showMessage($type, $message){
            return '<div class="alert alert-'.$type.' alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong class="text-center">'.$message.'</strong>
            </div>';
        }

    }

    // $ob = new Database();
?>