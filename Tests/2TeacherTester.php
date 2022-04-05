<?php 

require_once '../School.php';
$s = new School("UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");

// #test add remove teacher 
// #add a teacher - expected $rc = 0
$rc = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
// #try to add same teacher - expected $rc = -1
$rc = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
echo "returncode: $rc\n";
$rc = $s->addTeacher(2,"Martin","Edwin","Smith",700);
$rc = $s->addTeacher(3,"Gintautas","","Bloze",700);
$rc = $s->addTeacher(7,"Christina","","Aros",700);
$rc = $s->addTeacher(10,"Bo","","Stærke",700);

$teachers = $s->getTeachers();
foreach($teachers as $t){
     echo $t->__toString();
}
echo "----------\n";
$rc = $s->removeTeacher($teachers[10]);
echo "returncode: $rc\n";
echo "----------\n";
$teachers = $s->getTeachers();
foreach($teachers as $t){
     echo $t->__toString();
}
echo "test ends!";