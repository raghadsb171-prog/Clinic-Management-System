<?php
namespace UserInterface;
use AppLogic\ALFacade;

class UIFacade {
    public function schedule($pId, $date) {
        $al = new ALFacade();
        return $al->handleAppointment($pId, $date);
    }

    public function updateRecord($pId, $data) {
        $al = new ALFacade();
        return $al->handleRecordUpdate($pId, $data);
    }
}