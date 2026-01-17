<?php
require_once __DIR__ . '/../../DataAccess/DAFacade.php';
require_once __DIR__ . '/Entities/Patient.php';

class PatientRecordController {
    public function validateAndSave($id, $name, $history) {
        if(empty($name)) return false;
        $patient = new Patient($id, $name, $history);
        return DAFacade::getInstance()->insertPatientData($patient);
    }
}