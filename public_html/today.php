<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<title>石門浸信會防疫登記-總表</title>
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
    color:white;
}

.table td{
    color:#333333;
    
    

}



</style>

<body>

	
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class=" p-t-30 p-b-30">
<span class=" p-t-20 p-b-45">





<?php
require 'connect.php';
date_default_timezone_set("Asia/Taipei");

if (isset($_POST['date']))
{
    $date = $_POST['date'];

}
else //if no date selected, use today
{
    $date = date_create()->format('Y-m-d');
    
}

$sql = "Select Row_Number() OVER (Partition by substring(time_record,1,10) order by time_record) AS no, name,number,seat,time_record From people where substring(time_record,1,10)='$date';"; // set up your sql query


$result = $conn->query($sql); // Send SQL Query


if ($result->num_rows > 0)
{
    echo

    '<span class="login100-form-title p-t-20 p-b-45">',$date ,'座位總表', '</span>',

    '<table class="table table-borderless table-hover table-striped table-light"  style="margin-bottom:100px;">',

    '<thead class="thead-dark">',

    '<tr>', '<th>編號</th>', '<th>時間</th>', '<th>姓名</th>', '<th>電話</th>', '<th >位置</th>',

    '</tr>',

    '</thead>', '<tbody>';

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        // Process the Result here
        echo '<tr>', '<td>', $row['no'], '</td>', '<td>', $row['time_record'], '</td>', '<td>', $row['name'], '</td>', '<td>', $row['number'], '</td>', '<td>', $row['seat'], '</td>',

        '</tr>';

    }

    echo '</tbody>', '</table>';

}
else
{
    echo '<i class="fa fa-times mr-1" aria-hidden="true" style="color:#f05454;"></i>', '今日未有資料';
}

?>


<nav class="navbar fixed-bottom navbar-light bg-primary">
    
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 align-items-center ml-auto mr-auto">
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" onClick="window.location.reload();">
						    <i class="fa fa-refresh mr-1" aria-hidden="true"></i>
							重新整理
						</button>
					</div>

	
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" onClick="window.location.href='admin.php';">
						    <i class="fa fa-list-alt mr-1" aria-hidden="true"></i>
							返回總表
						</button>
					</div>
</div>
	
</nav>



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
