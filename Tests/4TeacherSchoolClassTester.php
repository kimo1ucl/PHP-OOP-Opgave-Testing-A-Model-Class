<?php 

require_once '../School.php';
$s = new School("UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");
$rc = $s->addSchoolClass(10, "ØIOE211");
$rc = $s->addSchoolClass(20, "ØIOE212");
$rc = $s->addSchoolClass(30, "ØIOE213");
$rc = $s->addSchoolClass(40, "ØIOE214");

$rc = $s->addTeacher(1,"Kim","Vestergård","Mogensen",500);
$rc = $s->addTeacher(2,"Martin","Edwin","Smith",700);

$teachers = $s->getTeachers();
$schoolclasses = $s->getSchoolClasses();
$t1 = $teachers[1];
try{
     $t1->addSchoolClass($schoolclasses[10]); //"ØIOE211"
     $t1->addSchoolClass($schoolclasses[20]); //"ØIOE212"
     $t1->addSchoolClass($schoolclasses[30]); //"ØIOE213"
     $t1->addSchoolClass($schoolclasses[40]); //"ØIOE214"
}
catch(Exception $e) {
     echo 'Message: ' .$e->getMessage();
}
   
$t2 = $teachers[2];
try{
     $t2->addSchoolClass($schoolclasses[10]); //"ØIOE211"
     $t2->addSchoolClass($schoolclasses[30]); //"ØIOE213"
}
catch(Exception $e) {
     echo 'Message: ' .$e->getMessage();
}

foreach($s->getTeachers() as $t ){
     echo "-->".$t->__toString();
     foreach($t->getSchoolClass() as $sc){
          echo "---->".$sc->__toString();
     }
}

foreach($s->getSchoolClasses() as $sc){
     if ($sc->getName() == "ØIOE211")
     {
          $sc->setName("ØIOE211??");
     }
}
foreach($s->getTeachers() as $t ){
     echo "-->".$t->__toString();
     foreach($t->getSchoolClass() as $sc){
          echo "---->".$sc->__toString();
     }
}



#test remove  SchoolClass from the teacher - no exception
try{
     $t1 = $t1->removeSchoolClass($schoolclasses[30]); //"ØIOE2114
}
catch(Exception $e) {
     echo 'Message: ' .$e->getMessage();
}

// invalid remove (class not assigned teacher), exception catched
try{
     $t2 = $t2->removeSchoolClass($schoolclasses[40]);
}
catch(Exception $e) {
     echo 'Message: ' .$e->getMessage();
}

// invalid add (class allready assigned teatcher), exception catched(allready exists), rc=-1
try{
     $t2->addSchoolClass($schoolclasses[10]);
}
catch(Exception $e) {
     echo 'Message: ' .$e->getMessage();
}
echo "test ends!";