<?php 

require_once '../School.php';
$s = new School("UCL Seebladsgade","Seebladsgade 1, 5000 Odense C");
#test add/remove SchoolClass
$rc = $s->addSchoolClass(1, "ØIOE211");
$rc = $s->addSchoolClass(2, "opboi20ed601");
// valid remove, rc=0
$rc = $s->removeSchoolClass(2);
echo "returncode: $rc\n";
// invalid remove (doesn't exist), rc=-1
$rc = $s->removeSchoolClass(3);
echo "returncode: $rc\n";

$rc = $s->addSchoolClass(2, "ØIOE212");
$rc = $s->addSchoolClass(3, "ØIOE213");
$rc = $s->addSchoolClass(4, "ØIOE214");
$schoolclasses = $s->getSchoolClasses();
foreach($schoolclasses as $sc ){
     echo $sc->__toString();
}

echo "test ends!";