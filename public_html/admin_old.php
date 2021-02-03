<!DOCTYPE html>
<html lang="zh-Hant" >
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
      <!-- DataTables v1.10.16 CSS-->
      <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
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
         <div class="container-login100 p-t-30 p-b-30">
            <span class="login100-form-title p-t-20 p-b-45">
                <?php echo $_GET['date'];?>
            座位總表
            </span>
            <div class="container">
               <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 ml-auto mr-auto mb-2">
                  <form action="admin.php" method = "get">
                     <label>選擇日期</label>
                     <input type = "date" name = "date">
                     <button type="submit" class="login100-form-btn">查詢</button>
                  </form>
               </div>
               <!--=============================================================-->
               <?php
                  require 'connect.php';
                  date_default_timezone_set("Asia/Taipei");
                  //$today = date_create()->format('Y-m-d');
                  $date = $_GET['date'];
                  $sql = "Select Row_Number() OVER (Partition by substring(time_record,1,10) order by time_record) AS no, name,number,seat,time_record From people where substring(time_record,1,10) = '$date';"; // set up your sql query
                  
                  
                  $result = $conn->query($sql); // Send SQL Query
                  
                  
                  if ($result->num_rows > 0)
                  {
                      echo '<table id="t1" class="table table-borderless table-hover table-striped table-light table-lg" style="margin-bottom:100px;">',
                  
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
                      //echo '<i class="fa fa-times mr-1" aria-hidden="true" style="color:#f05454;"></i>', '查無資料';
                      
                  }
                  
                  ?>
               <!--=============================================================-->
            </div>
            <!--navbar-->
            <nav class="navbar fixed-bottom navbar-light bg-primary">
               <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 ml-auto mr-auto mb-2">
                  <div class="container-login100-form-btn p-t-10">
                     <button class="login100-form-btn" onClick="window.location.reload();">
                     <i class="fa fa-refresh mr-1" aria-hidden="true"></i>
                     重新整理
                     </button>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--===============================================================================================-->	
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!-- DataTables v1.10.16 JS -->
      <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>
      <script>
         $(document).ready(function() {
         $('#t1').DataTable({
         
             "lengthMenu": [5, 10, 25, 50, 100, 300, 500],
             "pageLength": 300,
             
             
             "dom": 'lfpirt',
             "language": {
                 "lengthMenu": "顯示 _MENU_ 筆資料",
                 "search": "搜尋",
         
                 "paginate": {
                     "first": "首頁",
                     "last": "尾頁",
                     "next": "下一頁",
                     "previous": "上一頁"
                 },
                 "zeroRecords": "無相對應的資料",
                 "info": "顯示第 _START_ 筆到第 _END_ 筆,共 _TOTAL_ 筆資料",
             }
         
         }
         
         );
         });
      </script>
   </body>
</html>