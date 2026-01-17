<?php
class DAFacade {
    private static $instance = null;
    private $conn;

    private function __construct() {
        // الربط المباشر لضمان عدم حدوث خطأ في المسار
        $this->conn = new PDO("mysql:host=localhost;dbname=clinic_db", "root", "");
    }

    public static function getInstance() {
        if (self::$instance == null) self::$instance = new DAFacade();
        return self::$instance;
    }

    public function insertPatientData($id, $name, $history) {
        $stmt = $this->conn->prepare("INSERT INTO patients (patientID, name, medicalHistory) VALUES (?, ?, ?)");
        return $stmt->execute([$id, $name, $history]);
    }

    public function insertAppointment($pId, $dId, $date) {
        $stmt = $this->conn->prepare("INSERT INTO appointments (patientID, physicianID, appointmentDate, status) VALUES (?, ?, ?, 'Scheduled')");
        $stmt->execute([$pId, $dId, $date]);
        return $this->conn->lastInsertId();
    }
}