<?php


	$conn = new mysqli("localhost", "root", "", "test1");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
if(isset($_POST['storage'])){
	
	
	$myRec=json_decode($_POST['storage'],true);
	print_r($myRec);
	for($i = 0; $i < count($myRec); $i++){
		 $target='';
		 $type='';
		 $date='';
       foreach ($myRec[$i] as $key => $value) {
		    if($key=='target')
				$target=$value;
			if($key=='type' )
				$type=$value;
			if($key=='date')
				$date=$value;
       }
		
		$sql = "Insert Into storage values('$target', '$type', '$date')";
		$conn->query($sql);
	 }
	
	
	 
	
}



?>














