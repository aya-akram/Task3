<?php
namespace StudentManagementSystem\Entities;
class Course {
    private static $lastId = 0;
    public readonly int $id;
    public $name;

    public function __construct($name) {
        $this->id = ++self::$lastId;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }
}