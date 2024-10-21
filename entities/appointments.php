<?php

    class Appointment {
        protected $db;

        public function __construct($db) {
            $this -> db = $db;
        }
        public function addAppointment($doc_id, $u_id, $app_date) {
            $query = "INSERT INTO appointments(doc_id,uid,appointment_date,appointment_time) VALUES ('$doc_id','$u_id','$app_date','10:00')";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
        }
        public function updateAppointment($app_id, $app_date) {
            $query = "UPDATE appointments SET appointment_date = '$app_date' WHERE app_id = '$app_id'"; 
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
        }
        public function deleteAppointment($app_id) {
            $query = "DELETE FROM appointments WHERE app_id = '$app_id'"; 
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
        }
        public function retreiveInfo($user_id) {
            $query = "SELECT a.app_id, a.appointment_date, a.appointment_time, d.name FROM appointments a INNER JOIN doctors d ON a.doc_id = d.doc_id WHERE uid = '$user_id'";
            $stmt = $this -> db -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchALL(PDO::FETCH_ASSOC);
        }
    }
?>