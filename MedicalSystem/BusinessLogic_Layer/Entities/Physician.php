<?php
class Physician {
    public $physicianID;
    public $name;
    public $specialization;

    public function __construct($id, $name, $spec) {
        $this->physicianID = $id;
        $this->name = $name;
        $this->specialization = $spec;
    }

    // ميثود من سيكونس دايجرام المواعيد (خطوة 7)
    public function checkAvailability($date) {
        // يتم الاستدعاء من الـ DAFacade للتأكد من المواعيد
        return DAFacade::getInstance()->queryPhysicianSchedule($this->physicianID, $date);
    }
}