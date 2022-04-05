<?php


// MacOS 12.2.1

require_once 'School.php';

$s = new School(1,"UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");
$rc = $s->addSchoolClass(10, "ØIOE211");
$rc = $s->addSchoolClass(20, "ØIOE212");
$rc = $s->addSchoolClass(30, "ØIOE213");
$rc = $s->addSchoolClass(40, "ØIOE214");

$rc = $s->addStudent(1,"Bruce","Karate","Lee");
$rc = $s->addStudent(2,"George","","Michael");
$rc = $s->addStudent(3,"Michael","","Jackson");

$students = $s->getStudents();
$schoolclasses = $s->getSchoolClasses();

$stud = $students[1];
$sc = $schoolclasses[40];
$stud->addSchoolClass($sc);

