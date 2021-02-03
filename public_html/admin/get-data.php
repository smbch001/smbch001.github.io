<?php
require 'connect.php';
date_default_timezone_set("Asia/Taipei");
$date = $_GET['date'];

if (empty($date))
{
    
    $sql = "SELECT Row_Number() 
            OVER (ORDER BY time_record) 
            AS no, substring(time_record,1,10) as date_only,substring(time_record,12,8) as time_only,name,number,seat,comment 
            From people"; // set up your sql query
}
else
{
    $sql = "SELECT Row_Number() 
            OVER (ORDER BY time_record) 
            AS no, substring(time_record,1,10) as date_only,substring(time_record,12,8) as time_only,name,number,seat,comment 
            From people 
            WHERE substring(time_record,1,10) = '$date'"; // set up your sql query
}

$result = $conn->query($sql); // Send SQL Query


if ($result->num_rows > 0)
{
    echo '<table id="example1" class="table table-bordered table-striped table-hover">',

    //'<thead class="bg-primary text-light">',
    '<thead class="thead-dark">', '<tr>', '<th>編號</th>', '<th>日期</th>', '<th>姓名</th>', '<th>座位</th>', '<th>電話</th>', '<th>時間</th>','<th>備註</th>',

    '</tr>',

    '</thead>', '<tbody>';

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        // Process the Result here
        echo '<tr>', '<td>', $row['no'], '</td>', '<td>', $row['date_only'], '</td>', '<td>', $row['name'], '</td>', '<td>', $row['seat'], '</td>', '<td>', $row['number'], '</td>', '<td>', $row['time_only'], '</td>','<td>', $row['comment'], '</td>',

        '</tr>';

    }

    echo '</tbody>', '</table>';

}
else
{
    echo '<i class="fa fa-times mr-1" aria-hidden="true" style="color:#f05454;"></i>', '查無資料';

}

?>
