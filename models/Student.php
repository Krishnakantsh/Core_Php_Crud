<?php
class Student {
    private $conn;
    private $table = "students";

    public $id;
    public $name;
    public $email;
    public $course;

    public function __construct($db) {
        $this->conn = $db;
    }

    // CREATE
    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  SET name=:name, email=:email, course=:course";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":course", $this->course);

        return $stmt->execute();
    }

    // READ
    public function read() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        return $this->conn->query($query);
    }

    // UPDATE
    public function update() {
        $query = "UPDATE " . $this->table . "
                  SET name=:name, email=:email, course=:course
                  WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":course", $this->course);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

    // DELETE
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}
