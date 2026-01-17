<?php
namespace Database;

class DbFacade {
    public function executeSelectQuery($sql) {
        // محاكاة استرجاع بيانات المستخدم أو الدواء
        return ["status" => "exists", "data" => "PharmacyUser"];
    }

    public function executeUpdateQuery($sql) {
        return 1; // تم التحديث بنجاح
    }
}