<?php
class PatientUI {
    public function submitPatientInfo($id, $name, $history) {
        $success = BLFacade::getInstance()->managePatient($id, $name, $history);
        if($success) {
            echo "Patient Record Updated Successfully.";
        }
    }
}