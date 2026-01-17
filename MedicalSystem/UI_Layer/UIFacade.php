<?php
require_once dirname(__FILE__) . '/../BusinessLogic/BLFacade.php';

class UIFacade {
    public function requestAppointment($pId, $docId, $date) {
        return BLFacade::getInstance()->scheduleAppointment($pId, $docId, $date);
    }

    public function requestSavePatient($id, $name, $history) {
        return BLFacade::getInstance()->managePatient($id, $name, $history);
    }
}