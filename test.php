<?php

require_once 'Course.php';
require_once 'Student.php';
require_once 'Manager.php';

use StudentManagementSystem\Entities\Course;
use StudentManagementSystem\Entities\Student;
use StudentManagementSystem\Services\Manager;

// Create some courses
$course1 = new Course("English");
$course2 = new Course("java");
$course3 = new Course("php");


// Instantiate the manager
$manager = new Manager();

// Add some students
$manager->addStudent(new Student("aya", "aya@gmail.com", [$course1, $course2,$course3]));
$manager->addStudent(new Student("hala", "hh@gmail.com", [$course1]));
$manager->addStudent(new Student("salma", "ss@gmail.com", [$course2]));
$manager->addStudent(new Student("Aya akram ", "aya@hotmail.com", [$course1,$course2]));


// Update student details
$manager->updateStudent(1, "aya aaa", "aya@hotmail.com", [$course2]);

// Retrieve a student
$student = $manager->getStudent(1);

if($student !== null) {
    echo $student->name;
}

// Delete a student
$manager->deleteStudent(1);

// Try to get the deleted student
$student = $manager->getStudent(1);
if($student === null) {
    echo "Student has been successfully deleted."; 
} else {
    echo $student->name; 
}
