<?php
class Appointment {
    public $appointmentID;
    public $patientID;
    public $physicianID;
    public $date;
    public $status;

    public function __construct($pId, $docId, $date) {
        $this->patientID = $pId;
        $this->physicianID = $docId;
        $this->date = $date;
        $this->status = "Active";
    }
}