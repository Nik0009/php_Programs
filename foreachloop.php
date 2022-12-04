<?php
$students=array(array('Name'=>'shruti',
					 'Age'=>21,
					 'Weight'=>50),
			   array('Name'=>'niku',
				     'Age'=>'21',
					 'Weight'=>'58')
			 );
foreach($students as $student=> $innrerArray)
{
	echo '<b>'.$student.'</b><br>';
	foreach( $innrerArray as $items)
	{
		echo  $items.'<br>';
	}
}

?>