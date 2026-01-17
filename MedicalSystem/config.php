<?php
// إعدادات قاعدة البيانات
define('DB_HOST', 'localhost');
define('DB_NAME', 'clinic_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Autoloader: يبحث عن الكلاسات في المجلدات الفرعية تلقائياً
spl_autoload_register(function ($class_name) {
    $folders = [
        'DataAccess/',
        'BusinessLogic/',
        'BusinessLogic/Entities/',
        'UI/'
    ];
    
    foreach ($folders as $folder) {
        $file = __DIR__ . '/' . $folder . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});