<?php
namespace StudentManagementSystem\Entities;


class Student {
    private static $lastId = 0;
    public readonly int $id;
    public $name;
    public $email;
    public $courses = array();

    public function __construct($name, $email, $courses = []) {
        $this->id = ++self::$lastId;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }

    public function getId() {
        return $this->id;
    }
    
    public static function getLastId() {
        return self::$lastId;
    }
}
