<?php
    

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

        public function getDoctorByName($doc_name, $doc_specialisation = "") {
            $query = "SELECT * FROM doctors WHERE name = '$doc_name'";
            if($doc_specialisation != "") {
                $query = $query . " and specialization = '$doc_specialisation'";
            }
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>