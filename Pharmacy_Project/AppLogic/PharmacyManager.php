<?php
namespace AppLogic;
use Database\DbFacade;

class PharmacyManager {
    public function updatePatientRecord($patientId, $data) {
        $db = new DbFacade();
        return $db->executeUpdateQuery("UPDATE patients SET notes = '$data' WHERE id = $patientId");
    }

    public function createAppointment($patientId, $date) {
        $db = new DbFacade();
        return $db->executeUpdateQuery("INSERT INTO appointments (p_id, app_date) VALUES ($patientId, '$date')");
    }
}