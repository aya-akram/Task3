<?php
namespace StudentManagementSystem\Services;
use StudentManagementSystem\Entities\Student;


trait Loggable {
    public function log($message) {
        // append the message into log.txt
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
    }
}
class Manager {
    use Loggable;

    private $students = [];

    public function addStudent(Student $student) {
        $this->students[$student->getId()] = $student;
        $this->log("Added student with ID " . $student->getId());
    }

    public function updateStudent($id, $name, $email, $courses) {
        if(isset($this->students[$id])) {
            $this->students[$id]->name = $name;
            $this->students[$id]->email = $email;
            $this->students[$id]->courses = $courses;
            $this->log("Updated student with ID " . $id);
        }
    }

    public function getStudent($id) {
        $this->log("Retrieved student with ID " . $id);
        return $this->students[$id] ?? null;
    }

    public function deleteStudent($id) {
        if(isset($this->students[$id])) {
            unset($this->students[$id]);
            $this->log("Deleted student with ID " . $id);
        }
    }
}