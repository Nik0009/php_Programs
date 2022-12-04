<?php
/*students
Name 	Age 	Weight
shruti 	21 		50
niku	21		58
*/
$student=array(array('Name'=>'shruti',
					 'Age'=>21,
					 'Weight'=>50),
			   array('Name'=>'niku',
				     'Age'=>'21',
					 'Weight'=>'58')
			 );
/*echo $student[0]['Name'].' ';echo $student[0][1].' 'echo $student[0][2].'<br>';*/
echo $student[0]['Name'].' ';echo $student[0][ 'Age'].' ';echo $student[0]['Weight'].'<br>';
echo $student[1]['Name'].' ';echo $student[1][ 'Age'].' ';echo $student[1]['Weight'].'<br>';
?>