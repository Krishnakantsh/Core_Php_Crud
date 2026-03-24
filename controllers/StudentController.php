<?php
require_once '../config/database.php';
require_once '../models/Student.php';

class StudentController {
    private $student;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->student = new Student($db);
    }

    public function store($data) {
        $this->student->name = $data['name'];
        $this->student->email = $data['email'];
        $this->student->course = $data['course'];

        return $this->student->create();
    }

    public function update($data) {
        $this->student->id = $data['id'];
        $this->student->name = $data['name'];
        $this->student->email = $data['email'];
        $this->student->course = $data['course'];

        return $this->student->update();
    }

    public function delete($id) {
        $this->student->id = $id;
        return $this->student->delete();
    }

    public function index() {
        return $this->student->read();
    }
}
