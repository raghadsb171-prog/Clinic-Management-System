<?php
// نستخدم dirname(__FILE__) لضمان الوصول للمجلد الصحيح مهما كان مستوى المجلدات
require_once dirname(__FILE__) . '/../DataAccess/DAFacade.php';

class BLFacade {
    private static $instance = null;
    public static function getInstance() {
        if (self::$instance == null) self::$instance = new BLFacade();
        return self::$instance;
    }

    public function scheduleAppointment($pId, $docId, $date) {
        return DAFacade::getInstance()->insertAppointment($pId, $docId, $date);
    }

    public function managePatient($id, $name, $history) {
        return DAFacade::getInstance()->insertPatientData($id, $name, $history);
    }
}