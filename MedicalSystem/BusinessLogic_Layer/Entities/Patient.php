<?php
class Patient {
    public $patientID;
    public $name;
    public $contactInfo;
    public $medicalHistory;

    public function __construct($id, $name, $history = "") {
        $this->patientID = $id;
        $this->name = $name;
        $this->medicalHistory = $history;
    }
}