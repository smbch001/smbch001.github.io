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
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
			    

					<span class="login100-form-title p-t-20 p-b-45">

						
						
		
<?php
require 'connect.php';
//isset->check if variable is set.

date_default_timezone_set("Asia/Taipei");





if (isset($_POST['name'])  && isset($_POST['number']) && isset($_POST['alpha']) && isset($_POST['seat']) ) 
{
	$name = $_POST['name'] ;
	$number = $_POST['number'];
	$seat = $_POST['alpha'].$_POST['seat'];
    $date = date_create()->format('Y-m-d H:i:s');
    

    if (isset($_POST['new']) || isset($_POST['have']))
    {
        $comment = $_POST['new'].$_POST['have'];
    }

	$insert_sql = "INSERT INTO people (name,number,seat,comment,time_record) VALUES('$name','$number','$seat','$comment','$date');";
	
	// ******** update your personal settings ******** 
	
	if ($conn->query($insert_sql) === TRUE) 
	{
		echo '<i class="fa fa-check-circle mr-1" aria-hidden="true" style="color:#48de48"></i>新增成功!<br/>';
		echo '<b>',$name,'</b>已於<b>',$date,'</b><br/>登記<b>',$seat,'</b>的座位';
		
		
		
		
	} else 
	{
		echo "新增失敗!";
	}

}
else
{
	echo "資料不完全";
}
				
?>				
						
						
						
						
						
						
						
						
						
					</span>



					

       
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="index.html" class="txt1">
						    <i class="fa fa-arrow-circle-o-left mr-1" aria-hidden="true"></i>
							返回
						</a>
					</div>


					
					

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
