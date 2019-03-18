<?php 
include 'student.php';

$obj1=new student("张三1",101);
$obj2=new student("张三2",102);
$obj3=new student("张三3",103);
$obj4=new student("张三4",104);
$obj5=new student("张三5",105);
function index($n){
	for ($i=1; $i <=$n ; $i++) { 
		$c='obj'.$i;
		global $$c;
	}
$max=1;
	for ($i=1; $i <=$n ; $i++) { 
		 $a='obj'.$i;
		 $b='obj'.$max;
		 if ($$a->age > $$b->age) {
		 	 $max=$i;
		 }
	}
	$c='obj'.$max;
return $$c->age;
}
echo index(5);
 ?>
