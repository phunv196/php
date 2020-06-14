<?php
include('function.php');
$select=select_cate();
foreach($select as $i)
{
	echo $i['ID_cate']."  ".$i['namecate']."<br>";}
?>