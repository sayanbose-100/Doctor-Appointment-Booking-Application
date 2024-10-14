<?php
    session_start();

    class Doctor {
        protected $db;

        public function __construct($db) {
            $this -> db = $db;
        }

        public function getAllDoctors() {
            $query = "SELECT * FROM doctors";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function getDoctorByName(&$doc_name) {
            $stmt = array(); //blank assoc array
            $query = "SELECT * FROM doctors WHERE name = '$doc_name';";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>