<?php require '../../connect.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penyajian Data | Statistika Komputasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
      <!-- Sidebar user panel (optional) -->
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
                <a href="../tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengolahan Data</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.php" class="nav-link active">
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
            <h1>Penyajian Data</h1>
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
    //varian
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
    //////////////////////////////////////////////////////////////
    //data penyajian
    $count_saji=count($databaru);
    $ruang_kelas=max($databaru)-min($databaru);
    $banyak_kelas=ceil(1+(3.3*log($count_saji,10)));
    $range_kelas=ceil($ruang_kelas/$banyak_kelas);
    $datasaji=[];
    $fre_k=0;
    //olah data penyajian
    for ($i=0; $i < $banyak_kelas; $i++) { 
      $simpan=[];
      $min_in=$i*$range_kelas+min($databaru);
      $max_in=($i+1)*$range_kelas+min($databaru)-1;
      foreach ($databaru as $key => $value) {
        if ($value>=$min_in && $value<=$max_in) {
          array_push($simpan, $value);
        }
      }
      $fre_k+=count($simpan);
      $datasaji[$i]['jumlah']=count($simpan);
      $datasaji[$i]['min']=$min_in;
      $datasaji[$i]['max']=$max_in;
      $datasaji[$i]['fre_k']=$fre_k;
      $datasaji[$i]['fre_r']=number_format(count($simpan)/$count_saji*100,2);
      $datasaji[$i]['fre_rk']=number_format($fre_k/$count_saji*100,2);

    }
    ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table">
                  <h4 class="card-title"><b>Tabel Penyajian Data Kelompok</b></h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Interval</th>
                        <th>Distribusi Frekuensi</th>
                        <th>Distribusi Frekuensi Kumulatif</th>
                        <th>Distribusi Frekuensi Relatif</th>
                        <th>Distribusi Frekuensi Relatif Kumulatif</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($datasaji as $item) {
                      echo "<tr>".
                                "<td>".$item['min']."-".$item['max']."</td>".
                                "<td align='center'>".$item['jumlah']."</td>".
                                "<td align='center'>".$item['fre_k']."</td>".
                                "<td align='center'>".$item['fre_r']."%"."</td>".
                                "<td align='center'>".$item['fre_rk']."%"."</td>".
                            "</tr>";
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi dan frekuensi kumulatif -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Diagram Histogram Distribusi Frekuensi dan Distribusi Frekuensi Kumulatif</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="histogram_fre" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (RIGHT) -->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Diagram Histogram Distribusi Frekuensi Relatif dan Distribusi Frekuensi Relatif Kumulatif</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="histogram_freK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Diagram Ogiv Distribusi Frekuensi dan Distribusi Frekuensi Kumulatif</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ogiv_fre" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
            <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Diagram Ogiv Distribusi Frekuensi Relatif dan Distribusi Frekuensi Relatif Kumulatif</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ogiv_freK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Diagram Lingkaran Distribusi Frekuensi </h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ling_fre" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Diagram Lingkaran Distribusi Frekuensi Kumulatif </h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ling_freK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Diagram Lingkaran Distribusi Frekuensi Relatif </h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ling_freR" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
          <div class="col-md-6">
            <!-- Diagram histogram frekuensi relatif dan frekuensi relatif kumulatif -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Diagram Lingkaran Distribusi Frekuensi Relatif Kumulatif </h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ling_freRK" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col-left-->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    // Bar chart: Frekuensi dan Frekuensi Kumulatif
    var fre_frekCanvas = document.getElementById('histogram_fre').getContext('2d')
    var fre_frekData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#999999',
          borderColor         : '#999999',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['jumlah'].'",';} ?>]
        },
        {
          label               : 'Distrbusi Frekuensi Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#0066CC',
          borderColor         : '#0066CC',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_k'].'",';} ?>]
        },
      ]
    }

    var fre_frekOptions = {
      plugins:{
        datalabels:{
          display: false
        }
      },
      responsive: true,
      tooltips:{
        mode:'index',
        intersect: false
      },
    }

    var fre_frekChart = new Chart(fre_frekCanvas, { 
      type: 'bar',
      data: fre_frekData, 
      options: fre_frekOptions
    })

    // Bar chart: Frekuensi Relatif dan Frekuensi Relatif Kumulatif
    var freKCanvas = document.getElementById('histogram_freK').getContext('2d')
    var freKData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi Relatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#999999',
          borderColor         : '#999999',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_r'].'",';} ?>]
        },
        {
          label               : 'Distrbusi Frekuensi Relatif Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#0066CC',
          borderColor         : '#0066CC',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_rk'].'",';} ?>]
        },
      ]
    }

    var freKOptions = {
      plugins:{
        datalabels:{
          display: false
        }
      },
      responsive: true,
      tooltips:{
        mode:'index',
        intersect: false
      },
    }

    var freKChart = new Chart(freKCanvas, { 
      type: 'bar',
      data: freKData, 
      options: freKOptions
    })

    // Line chart: Frekuensi dan Frekuensi Kumulatif
    var ogivfreCanvas = document.getElementById('ogiv_fre').getContext('2d')
    var ogivfreData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#999999',
          borderColor         : '#999999',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['jumlah'].'",';} ?>]
        },
        {
          label               : 'Distrbusi Frekuensi Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#0066CC',
          borderColor         : '#0066CC',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_k'].'",';} ?>]
        },
      ]
    }

    var ogivfreOptions = {
      plugins:{
        datalabels:{
          display: false
        }
      },
      responsive: true,
      tooltips:{
        mode:'index',
        intersect: false
      },
      scales: {
        xAxes: [{
          display: true, 
        }],
        yAxes: [{
          display: true,
        }]
      }
    }

    var ogivfreChart = new Chart(ogivfreCanvas, { 
      type: 'line',
      data: ogivfreData, 
      options: ogivfreOptions
    })

    // Line chart: Frekuensi dan Frekuensi Kumulatif
    var ogivfreKCanvas = document.getElementById('ogiv_freK').getContext('2d')
    var ogivfreKData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi Relatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#999999',
          borderColor         : '#999999',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_r'].'",';} ?>]
        },
        {
          label               : 'Distrbusi Frekuensi Relatif Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : '#0066CC',
          borderColor         : '#0066CC',
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_rk'].'",';} ?>]
        },
      ]
    }

    var ogivfreKOptions = jQuery.extend(true, {}, ogivfreOptions)

    var ogivfreKChart = new Chart(ogivfreKCanvas, { 
      type: 'line',
      data: ogivfreKData, 
      options: ogivfreKOptions
    })

    //Diagram Lingkaran: Distribusi Frekuensi
    var lingfreCanvas = document.getElementById('ling_fre').getContext('2d')

    var lingfreData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi',
          fill                : false,
          tension             : 0,
          backgroundColor     : ['#999999', '#ff1a1a', '#00ff00', '#0033cc', '#ff1a8c', '#3366ff', '#80bfff'],
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['jumlah'].'",';} ?>]
        },
      ]
    }

    var lingfreOptions = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var lingfreChart = new Chart(lingfreCanvas, { 
      type: 'pie',
      data: lingfreData, 
      options: lingfreOptions
    })

    //Diagram Lingkaran: Distribusi Frekuensi Kumulatif
    var lingfreKCanvas = document.getElementById('ling_freK').getContext('2d')

    var lingfreKData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : ['#999999', '#ff1a1a', '#00ff00', '#0033cc', '#ff1a8c', '#3366ff', '#80bfff'],
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_k'].'",';} ?>]
        },
      ]
    }

    var lingfreKOptions = jQuery.extend(true, {}, lingfreOptions)

    var lingfreKChart = new Chart(lingfreKCanvas, { 
      type: 'pie',
      data: lingfreKData, 
      options: lingfreKOptions
    })

    //Diagram Lingkaran: Distribusi Frekuensi Relatif
    var lingfreRCanvas = document.getElementById('ling_freR').getContext('2d')

    var lingfreRData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi Relatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : ['#999999', '#ff1a1a', '#00ff00', '#0033cc', '#ff1a8c', '#3366ff', '#80bfff'],
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_r'].'",';} ?>]
        },
      ]
    }

    var lingfreROptions = jQuery.extend(true, {}, lingfreOptions)
    var lingfreRChart = new Chart(lingfreRCanvas, { 
      type: 'pie',
      data: lingfreRData, 
      options: lingfreROptions
    })

    //Diagram Lingkaran: Distribusi Frekuensi Relatif Kumulatif
    var lingfreRKCanvas = document.getElementById('ling_freRK').getContext('2d')

    var lingfreRKData = {
      labels  : [<?php foreach ($datasaji as $item) { echo '"'.$item['min']."-".$item['max'].'",';} ?>],
      datasets: [
        {
          label               : 'Distrbusi Frekuensi Relatif Kumulatif',
          fill                : false,
          tension             : 0,
          backgroundColor     : ['#999999', '#ff1a1a', '#00ff00', '#0033cc', '#ff1a8c', '#3366ff', '#80bfff'],
          data                : [<?php foreach ($datasaji as $item) { echo '"'.$item['fre_rk'].'",';} ?>]
        },
      ]
    }

    var lingfreRKOptions = jQuery.extend(true, {}, lingfreOptions)
    var lingfreRKChart = new Chart(lingfreRKCanvas, { 
      type: 'pie',
      data: lingfreRKData, 
      options: lingfreRKOptions
    })
  })
    
</script>
</body>
</html>
