<?php 

require_once '../School.php';
$s = new School("UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");
#test add/remove SchoolClass
$rc = $s->addSchoolClass(10, "ØIOE211");
$rc = $s->addSchoolClass(20, "ØIOE212");
$rc = $s->addSchoolClass(30, "ØIOE213");
$rc = $s->addSchoolClass(40, "ØIOE214");
$schoolclasses = $s->getSchoolClasses();
foreach($schoolclasses as $sc ){
     echo $sc->__toString();
}

$rc = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
$rc = $s->addTeacher(2,"Martin","Edwin","Smith",700);
$teachers = $s-> getTeachers();
$t1 = $teachers[1];
$t1->addSchoolClass($schoolclasses[10]); //"ØIOE211"
$t1->addSchoolClass($schoolclasses[20]); //"ØIOE212"
$t1->addSchoolClass($schoolclasses[30]); //"ØIOE213"
$t1->addSchoolClass($schoolclasses[40]); //"ØIOE213"
$t2 = $teachers[2];
$t1->addSchoolClass($schoolclasses[10]); //"ØIOE211"
$t1->addSchoolClass($schoolclasses[30]); //"ØIOE213"

foreach($teachers as $t ){
     echo $t->__toString();
     
     foreach($t->getSchoolClass() as $sc){
          echo $sc->__toString();
     }
}


#test add teacher then remove same SchoolClass to the teacher - success
$t1->removeSchoolClass($sc); //"ØIOE2114
$schoolclasses = $t1->getSchoolClass();
foreach($schoolclasses as $sc ){
     echo $sc->__toString();
}


#test add teacher then add same SchoolClass to the teacher - fail
$sc = $schoolclasses[1];
$t1->addSchoolClass($sc); //"ØIOE211"


#test add student then add a SchoolClass to the student 
#test add remove student
#add a student - expected $rc = 0
$rc = $s->addStudent(1,"Bruce","Karate","Lee");
#try to add same teacher - expected $rc = -1
$rc = $s->addStudent(1,"Bruce","Karate","Lee");
$rc = $s->addStudent(2,"George","","Michael");
$rc = $s->addStudent(3,"Michael","","Jackson");



// $rc0 = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
// $rc0 = $s->addTeacher(2,"Martin","Edwin","Smith",700);
// $teachers = $s->getTeachers();
// foreach($teachers as $t ){
//     echo $t->__toString();
// }



echo "test ends!";