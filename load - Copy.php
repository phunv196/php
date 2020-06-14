<?php 
	include ('connect.php');
	
   if(isset($_POST['id']))
   	{
	 $id = $_POST['id'];
	 $sql="select * from quequan";
     $run=mysqli_query($conn,$sql);
     $data = array();
	 while ($row = mysqli_fetch_array($run)) { 
	 	array_push($data, $row['Address']);
	 }
		 
	 echo json_encode($data);  
	}
?>