<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
    
    echo 'Hello UDPM3<font color="#FF0000" size="+6">"PHP rat tot"</font>';
?>
<table border="1" bgcolor="#FFFFCC">
<?php
	for($i=1;$i<=10;$i++)
	  { echo "<tr>";
		 for($j=1;$j<=10;$j++)
		 {
         echo "<td>";
         echo $i."x".$j."=".$i*$j;
         echo "</td>";
		 }
		 echo "</tr>";
	  }
?>
</table>
</body>
</html>