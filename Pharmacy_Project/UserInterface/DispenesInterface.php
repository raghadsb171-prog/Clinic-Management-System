<?php
namespace UserInterface;
use AppLogic\ALFacade;

class DispenseInterface {
    public function render() {
        echo '
        <div style="max-width: 700px; margin: 20px auto; font-family: sans-serif; background: #fff; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="background: #00796b; color: white; padding: 20px; display: flex; justify-content: space-between;">
                <h2 style="margin:0;">Pharmacy & Clinic Management</h2>
                <a href="?logout=1" style="color:white; text-decoration:none; border:1px solid white; padding:5px 10px; border-radius:5px;">Logout</a>
            </div>
            
            <div style="padding: 20px;">
                <div style="border: 1px solid #eee; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <h3 style="color: #00796b; margin-top:0;">📅 Schedule Appointment</h3>
                    <form method="POST">
                        <input type="text" name="patient_name" placeholder="Patient Name" style="width:60%; padding:10px; margin-bottom:10px;">
                        <input type="datetime-local" name="app_date" style="width:35%; padding:10px;">
                        <button type="submit" name="action" value="schedule" style="width:100%; padding:10px; background:#00796b; color:white; border:none; border-radius:5px; cursor:pointer;">Confirm Appointment</button>
                    </form>
                </div>

                <div style="border: 1px solid #eee; padding: 15px; border-radius: 8px;">
                    <h3 style="color: #00796b; margin-top:0;">📋 Manage Patient Records</h3>
                    <form method="POST">
                        <select name="p_id" style="width:100%; padding:10px; margin-bottom:10px;">
                            <option>Select Patient: Ahmad Ali (ID: 2202)</option>
                            <option>Select Patient: Sara Salem (ID: 2205)</option>
                        </select>
                        <textarea name="medical_notes" placeholder="Update medical history and prescriptions..." style="width:100%; height:80px; padding:10px; margin-bottom:10px;"></textarea>
                        <button type="submit" name="action" value="update_record" style="width:100%; padding:10px; background:#0288d1; color:white; border:none; border-radius:5px; cursor:pointer;">Update Medical Record</button>
                    </form>
                </div>
            </div>
        </div>';
    }
}