<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<title>石門浸信會防疫系統</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>


<style>

.table th{
    text-align:center;
    background-color:#333333;
}

.table td{
    color:#333333;
    background-color:#FFFFFF;
    

}



</style>

<body>

	
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
<span class="login100-form-title p-t-20 p-b-45">





<?php require 'connect.php';?>
<?php

    
    $name = $_POST['name'];
	$sql = "SELECT * FROM people WHERE name = '$name';";	// set up your sql query
	$result = $conn->query($sql);	// Send SQL Query

	if ($result->num_rows > 0) 
	{	
	    echo 
'<table class="table table-bordered table-hover">',

'<thead class="thead-dark">',

'<tr>',
'<th colspan=2>',$name,'</th>',

'</tr>',



'<tr>',



      '<th>時間</th>',
      '<th >位置</th>',
    '</tr>',

    
  '</thead>',
  '<tbody>';
	    
	    
		while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) 
		{
			// Process the Result here
			echo
            '<tr>',
            '<td>',$row['time_record'],'</td>',
            '<td>',$row['seat'],'</td>',

            '</tr>';
			
			
			
			
			
		}
		
		echo 
		  '</tbody>',
'</table>';
		
		
		
		
	}
	else 
	{
		echo '<i class="fa fa-times mr-1" aria-hidden="true" style="color:#f05454;"></i>',
		'查無資料';
	}
?>

	
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="lookup.html" class="txt1">
						    <i class="fa fa-arrow-circle-o-left mr-1" aria-hidden="true"></i>
							返回
						</a>
					</div>



</span>


</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
