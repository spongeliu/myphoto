<?php
	$db = new mysqli('localhost','360er','lalala@#123','360er');
	$db->query("set names 'utf-8'");
	if (mysqli_connect_errno()){
                echo 'ERROR, can not connect to database';
        }
	$query = "select * from people";
	$result=$db->query($query);

        $num_results = $result->num_rows;

        for($i=0; $i<$num_results; $i++)
	{
		$row=$result->fetch_assoc();
		  $arr['list'][] = array( 
         	'top' => $row['top'], 
        	'left' => $row['lleft'], 
        	'hight' => $row['hight'], 
        	'width' => $row['width'], 
        	'val' => $row['val'], 
     ); 
	}
	if($num_results!=0)
	{
		echo json_encode($arr);
	}
	$db->close();

?>
