<?php require '../../connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengolahan data | Statistika Komputasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light position-fixed w-100">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <span class="brand-text font-weight-light">Survey Jumlah Foto dari <br> Kamera Smartphone Anda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/yanuar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Moch. Yanuar Fitroni</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengolahan Data</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penyajian Data</p>
                </a>
              </li>
            </ul>
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
            <h1>Pengolahan Data</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php
    $sum=0;
    $mean=0;
    $var=0;
    $stdevpal=0;
    $z_score=0;
    $databaru=[];
    $sum_o=0;
    $median=0;
    $mean_baru=0;
    
    // koneksi atau ambil database
    $query="select * from data_olah";
    $hasil= mysqli_query($conn,$query);
    //Dengan outlier
    // oerasi jumlah data
    $jumlah_survey = mysqli_num_rows($hasil);
    // operasi total data
    $data_asli=[];
    $ind=0;
    while($row=mysqli_fetch_array($hasil)){
      $sum += $row['data'];
      $temp = array('data' => $row['data'] );
      array_push($data_asli,$temp);
      array_push($databaru,$row['data']);
    }
    //mean
    $mean=$sum/$jumlah_survey;
    //varian populasi
    foreach($hasil as $i){
      $var+=pow($i['data'] - $mean,2)/$jumlah_survey;
    }
    //standart deviasi
    $stdevpal=sqrt($var);
    foreach ($data_asli as $key => $value) {
      $z_temp=($value['data']-$mean)/$stdevpal;
      $data_asli[$key]['z_score']=$z_temp;
      if($z_temp<-3||$z_temp>3){

        unset($databaru[$key]);
      }else{
        $sum_o+=$value['data'];
      }
    }
    $mean_baru=number_format($sum_o/count($databaru),2);
    //median, Q1, dan Q3
    $median=($databaru[ceil(count($databaru)/2)-1]+$databaru[ceil(count($databaru)/2)])/2;
    $quartil1=($databaru[ceil(count($databaru)/4)-1]+$databaru[ceil(count($databaru)/4)])/2;
    $quartil3=($databaru[ceil(count($databaru)/4*3)-1]+$databaru[ceil(count($databaru)/4*3)])/2;
    //Modus
    $temp=array_count_values($databaru);
    $modus=array_search(max($temp), $temp);
    //varian
    $var_bP=0;
    $var_bS=0;
    foreach ($databaru as $key => $d) {
      $var_bP+=pow($d-$mean_baru,2)/count($databaru);
      $var_bS+=pow($d-$mean_baru,2)/(count($databaru)-1);
    }
    //Standart Deviasi
    $stdev_bP=number_format(sqrt($var_bP),2);
    $stdev_bS=number_format(sqrt($var_bS),2);
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Data</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Data</th>
                      <th>z-score</th>
                      <th>outlier</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($data_asli as $key => $value) {
                      $x=$key+1;
                   
                    if($value['z_score']<-3 || $value['z_score']>3){
                      echo "<tr>".
                                "<td>".$x."</td>".
                                "<td>".$value['data']."</td>".
                                "<td>".$value['z_score']."</td>".
                                "<td>outlier</td>".
                            "</tr>";
                    }
                    else{
                      echo "<tr>".
                                "<td>".$x."</td>".
                                "<td>".$value['data']."</td>".
                                "<td>".$value['z_score']."</td>".
                                "<td>tidak</td>".
                            "</tr>";
                    }
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Pengolahan Data Z-Score</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Jenis</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <th>Jumlah Survey</th>
                        <td><?php echo $jumlah_survey; ?></td>
                      </tr>
                      <tr>
                        <th>Total Data Survey</th>
                        <td><?php echo $sum; ?></td>
                      </tr>
                      <tr>
                        <th>Mean</th>
                        <td><?php echo $mean; ?></td>
                      </tr>
                      <tr>
                        <th>Varian Populasi</th>
                        <td><?php echo $var; ?></td>
                      </tr>
                      <tr>
                        <th>Standart Populasi</th>
                        <td><?php echo $stdevpal; ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Pengolahan Data Tanpa Outlier</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Jenis</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Jumlah survey</th>
                      <td><?php echo count($databaru); ?></td>
                    </tr>
                    <tr>
                      <th>Total survey</th>
                      <td><?php echo $sum_o; ?></td>
                    </tr>
                    <tr>
                      <th>Mean</th>
                      <td><?php echo $mean_baru; ?></td>
                    </tr>
                    <tr>
                      <th>Modus</th>
                      <td><?php echo $modus; ?></td>
                    </tr>
                    <tr>
                      <th>Median</th>
                      <td><?php echo $median; ?></td>
                    </tr>
                    <tr>
                      <th>Kuartil 1</th>
                      <td><?php echo $quartil1; ?></td>
                    </tr>
                    <tr>
                      <th>Kuartil 3</th>
                      <td><?php echo $quartil3  ; ?></td>
                    </tr>
                    <tr>
                      <th>Varian Populasi</th>
                      <td><?php echo $var_bP; ?></td>
                    </tr>
                    <tr>
                      <th>Varian Sampel</th>
                      <td><?php echo $var_bS; ?></td>
                    </tr>
                    <tr>
                      <th>Standart Deviasi Populasi</th>
                      <td><?php echo $stdev_bP; ?></td>
                    </tr>
                    <tr>
                      <th>Standart Deviasi Sampel</th>
                      <td><?php echo $stdev_bS; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").Pngolahan Data({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').Pengolahan Data({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>