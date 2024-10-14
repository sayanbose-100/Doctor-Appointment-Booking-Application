<?php
    session_start();

    class User {
        protected $db;

        public function __construct($db) {
            $this -> db = $db;
        }

        public function addUser(&$name, &$email, &$pass, &$mobileNo, &$address) {
            $query = "INSERT INTO users(name,email,pass,phone,address) VALUES ('$name','$email','$pass','$mobileNo','$address')";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
        }

        public function validateUser(&$email, &$pass) {
            $query = "SELECT email,pass from users where email = '$email'";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function findById(&$email) {
            $query = "SELECT * from users where email = '$email'";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        }
    }
?>