<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</script>
<script src="./jquery-3.5.1.min.js">
 
</script>
</head>

<body>
<form method="post">
<select id="select" name="sl">
 
<option>Chọn tỉnh</option>
<?php include('connect.php');
$sql_option="select * from quequan";
$run_option=mysqli_query($conn,$sql_option);
$result = mysqli_fetch_all($run_option, MYSQLI_ASSOC);
?>
<?php foreach($result as $person): ?>
	<option value="<?php echo $person['ID_ad']?>">
    	<?php echo $person['ID_ad']?>
    </option>
    <?php endforeach; ?>


<?php ?>

</select>
<select id="select2" name="sl">

</select>
<form>

</body>

<script>

	$(document).ready(function(){
            $('#select').change(function(){
                var id = $(this).val();
                $.ajax({
					method: "POST",
					url: "load.php",
					dataType: "json",
					data: {id: id},
					success: function(data) {
						$('#select2').empty();
						$.each(data, function(index, element){
								$('#select2').append('<option>'+ element +'</option>');
							})
					}
				})
            });
        });
</script>




</html>