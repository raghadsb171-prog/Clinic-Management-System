<?php
namespace AppLogic;

class ALFacade {
    public function handleAppointment($pId, $date) {
        $manager = new \AppLogic\PharmacyManager(); 
        return $manager->createAppointment($pId, $date);
    }

    public function handleRecordUpdate($pId, $data) {
        $manager = new \AppLogic\PharmacyManager(); 
        return $manager->updatePatientRecord($pId, $data);
    }
}