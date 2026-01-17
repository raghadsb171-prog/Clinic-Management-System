<?php
require_once __DIR__ . '/UIFacade.php';

class AppointmentUI {
    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pId = $_POST['patient_id'];
            $docId = $_POST['doc_id'];
            $date = $_POST['app_date'];
            
            // استدعاء الـ UIFacade
            $result = UIFacade::getInstance()->requestNewAppointment($pId, $docId, $date);
            echo "Result: " . $result;
        }
    }
}