<?php
include('connect.php');
function insert_cate($chungloai)
{
  global $conn;
  $sql="insert into chungloai (namecate) values ('$chungloai')";
  $run=mysqli_query($conn,$sql);
  return $run;
}
function select_cate()
{
  global $conn;
  $sql="select * from chungloai";
  $run=mysqli_query($conn,$sql);
  $result=array();
  while($row=mysqli_fetch_array($run))
  {
	  $result[]=$row;
  }
  return $result;
  
}



?>