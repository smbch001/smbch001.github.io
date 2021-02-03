<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>石浸資料庫管理系統</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  
  <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">主頁</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">聯絡</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/smch-logo.png" alt="Smbch Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">石門浸信會</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/account.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">管理者</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
 

            
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        防疫座位總表
                        
                    </p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="../index.html" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        登記系統
                        
                    </p>
                </a>
            </li>
            
            
        </ul>
    </nav>
    
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>防疫座位總表</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">主頁</a></li>
              <li class="breadcrumb-item active">防疫座位總表</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">日期:<strong class="text-danger"><?php echo $_GET['date']; ?></strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <!-- daypicker -->
                <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 ml-auto mr-auto mb-2">
                    <form action="index.php" method = "get">
                        <label>選擇日期</label>
                        <input type = "date" name = "date" onchange="this.form.submit()">
                        <button type="submit">查詢</button>
                    </form>
                </div>
                

                
                
                <!-- Get data table from MySQL server -->
                <?php require "get-data.php"?>
              
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
     adminLTE <b>Version</b> 3.1.0-rc
    </div>
    基督教石門浸信會 2021
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>





<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    var table = $("#example1").DataTable({
    

    
    
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
         
        "lengthMenu": [10, 25, 50, 100, 300],
        //"pageLength": 300,

        "dom": 'flirtpB',
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
            
            "buttons": {
                "copy": "複製",
                "csv": "輸出CSV",
                "excel": "輸出Excel",
                "pdf": "輸出PDF",
                "print": "列印",
                "colvis": "可見欄位"
        },
        },

        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    });

    table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    table.buttons('.copy').text("FFF");
    
    
    
    
    
    
  });
  
  

  
  
</script>







</body>
</html>
