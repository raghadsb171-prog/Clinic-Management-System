<?php
class AppointmentController {
    public function requestAppointment($pId, $docId, $date) {
        // التحقق من المنطق (Business Rules) ثم الحفظ
        return DAFacade::getInstance()->insertAppointment($pId, $docId, $date);
    }
}