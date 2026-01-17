<?php
// تفعيل عرض الأخطاء لنعرف المشكلة فوراً إذا ظهرت
ini_set('display_errors', 1);
error_reporting(E_ALL);

// ربط الطبقة العليا فقط
require_once 'UI/UIFacade.php';

$ui = new UIFacade();

echo "<h1>Clinic System Implementation - Test Run</h1>";
echo "<hr>";

try {
    // 1. تجربة إضافة مريض (Manage Patient Record)
    $res1 = $ui->requestSavePatient(220221269, "Raghad Bolbol", "Allergy to Penicillin");
    echo $res1 ? "✅ Success: Patient added to DB.<br>" : "❌ Error: Could not save patient.<br>";

    // 2. تجربة حجز موعد (Schedule Appointment)
    $res2 = $ui->requestAppointment(220221269, 101, "2026-06-20 10:00:00");
    echo $res2 ? "✅ Success: Appointment created with ID: " . $res2 : "❌ Error: Could not create appointment.";

} catch (Exception $e) {
    echo "❌ Critical Error: " . $e->getMessage();
}