<?php
session_start();

// المحرك الأساسي لربط الملفات ببعضها تلقائياً
spl_autoload_register(function ($class) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

use UserInterface\UIFacade;

echo "<body style='background:#f4f7f6; font-family:sans-serif;'>";

$ui = new UIFacade();

// معالجة ضغطات الأزرار
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'schedule') {
        // استدعاء ميثود الجدولة
        $ui->schedule(1, $_POST['date']);
        echo "<div style='background:#d1e7dd; color:#0f5132; padding:15px; border-radius:8px; text-align:center; max-width:650px; margin:10px auto; border:1px solid #badbcc;'>
                ✅ <b>Success!</b> Appointment has been confirmed.
              </div>";
    } elseif ($action === 'update') {
        // استدعاء ميثود حفظ السجلات
        $ui->updateRecord(1, $_POST['notes']);
        echo "<div style='background:#cfe2ff; color:#084298; padding:15px; border-radius:8px; text-align:center; max-width:650px; margin:10px auto; border:1px solid #b6d4fe;'>
                ℹ️ <b>Updated!</b> Patient medical record has been saved.
              </div>";
    }
}

// عرض الواجهة الرسومية المدمجة
?>
<div style="max-width: 650px; margin: 40px auto; background: white; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); overflow: hidden;">
    <div style="background: #00695c; color: white; padding: 25px; text-align: center;">
        <h2 style="margin:0;">Hospital & Pharmacy Management</h2>
    </div>
    
    <div style="padding: 30px;">
        <div style="border: 1px solid #e0e0e0; padding: 20px; margin-bottom: 25px; border-radius: 10px; background: #fafafa;">
            <h3 style="color:#00695c; margin-top:0;">📅 Schedule Appointment</h3>
            <form method="POST">
                <label style="display:block; margin-bottom:5px; font-size:0.9em; color:#666;">Select Date & Time:</label>
                <input type="datetime-local" name="date" required style="width:100%; padding:12px; border:1px solid #ccc; border-radius:5px; margin-bottom:15px;">
                <button type="submit" name="action" value="schedule" style="width:100%; padding:12px; background:#00695c; color:white; border:none; border-radius:5px; cursor:pointer; font-weight:bold;">Confirm Appointment</button>
            </form>
        </div>

        <div style="border: 1px solid #e0e0e0; padding: 20px; border-radius: 10px; background: #fafafa;">
            <h3 style="color:#0277bd; margin-top:0;">📋 Patient Record Management</h3>
            <form method="POST">
                <label style="display:block; margin-bottom:5px; font-size:0.9em; color:#666;">Clinical Notes:</label>
                <textarea name="notes" placeholder="Enter patient diagnosis, prescriptions, or notes..." required style="width:100%; height:100px; padding:12px; border:1px solid #ccc; border-radius:5px; margin-bottom:15px; resize:none;"></textarea>
                <button type="submit" name="action" value="update" style="width:100%; padding:12px; background:#0277bd; color:white; border:none; border-radius:5px; cursor:pointer; font-weight:bold;">Save Medical Record</button>
            </form>
        </div>
    </div>
</div>
<?php echo "</body>"; ?>