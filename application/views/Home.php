<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eLogistic</title>

  <!-- Memangil link style untuk bootstrap, css, dan fonts google =========================================================-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/home.css" rel="stylesheet">
  <!-- ====================================================================================================================-->
</head>

<body id="page-top">
  <!-- Membuat menu navigasi ==============================================================================================-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">eLogistic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#info">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#lokasi">Lokasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#prosedur">Prosedur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- ======================================================================================================================-->

  <div class="jumbotron">
    <div class="container-fluid col-md-11" id="jumbotron">
      <h2><img class="branding" src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""></h2>
      <h2><span class="text-head">eLogistic</span></h2>
      <hr>
      <span>Selamat Datang di Website Kami</span>
      <br>
      <span>Kelola dan Manajemen logistik Anda dengan baik dan efisien</span><br>
      <span><span class="icon">&#9971</span> &nbsp&nbsp Jl.Kaliurang KM 14, Umbulmartani, Sleman, Yogyakarta</span><br>
      <span><span class="icon">&#9742</span> &nbsp 0852 1414 1212</span>
      <br><br><br>
      <span><button class="btn btn-success" id="logincontrol" onclick="location.href='<?php echo site_url('Home/login');?>'">Start to Login</button></span>
    </div>
  </div>
 
  <!-- Membuat menu info donasi ==========================================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section container-fluid" id="info">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">INFO DONASI</span>
        </h3>
        <hr>

        <p class="mb-3">Berikut merupakan data lokasi yang membuka donasi</p>
        <div class="col-md-12">  
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">no</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Kebutuhan</th>
              <th scope="col">QTY</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Status</th>
              </tr>
          </thead>
          
          <tbody>
            <?php 
            $no = 1;
            foreach($kebutuhan as $k){ ?>
            
            <tr>
              <td width="50px" scope="row"><?php echo $no++ ?></td>
              <td><?php echo $k['lokasi'] ?></td>
              <td><?php echo $k['kebutuhan'] ?></td>
              <td><?php echo $k['qty'] ?></td>
              <td><?php echo $k['keterangan'] ?></td>
              <td><?php echo $k['status'] ?></td>
            </tr>

            <?php } ?>
          
          </tbody>
        </table>
        </div>
      </div>
    </section>
  <!-- ======================================================================================================================-->

  <!-- Membuat menu Lokasi donasi ===========================================================================================-->
    <section class="resume-section container-fluid" id="lokasi">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">INFORMASI LOKASI BENCANA TERBARU</span>
        </h3>
        <hr>

        <p class="mb-3">Daftar Lokasi Bencana</p>
        <div class="col-md-12">            
        <table class="table table-bordered" >
          <thead style="text-align: center;">
            <tr>
              <th scope="col">id</th>
              <th scope="col">Jenis</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kabupaten/Kota</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Keterangan</th>
              </tr>
          </thead>
          
          <tbody>
            <?php 
            $no = 1;
            foreach($lokasi as $l){ ?>
            
            <tr>
              <td style="text-align: center;" width="50px" scope="row"><?php echo $no++ ?></td>
              <td><?php echo $l['jenis'] ?></td>
              <td><?php echo $l['alamat'] ?></td>
              <td><?php echo $l['kabupaten'] ?></td>
              <td><?php echo $l['provinsi'] ?></td>
              <td><?php echo $l['keterangan'] ?></td>
            </tr>

            <?php } ?>
          
          </tbody>
        </table>
      </div>
      </div>
    </section>
  <!-- ======================================================================================================================-->

  <!-- Membuat menu tata cara pengiriman BPBD ===========================================================================================-->
    <section class="resume-section container-fluid " id="prosedur">
      <div class="my-auto">
        <h3 class="mb-0"><span class="text-primary">TATA CARA PENGIRIMAN BARANG</span></h3>
        <hr> 
        <p class="mb-3">Berikut merupakan tata cara pengiriman dengan eLogistic</p>

        <table class="table table-borderless">
          <tbody>
            <?php 
            
            $no = 1;
            foreach($hasilnya as $r){ ?>
            
            <tr>
              <td width="50px" scope="row"><?php echo $no++ ?></td>
              <td><?php echo $r['prosedur'] ?></td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>

      </div>
    </section>
  <!-- ======================================================================================================================-->

  <!-- Membuat menu kontak web ==============================================================================================-->
    <section class="resume-section  container-fluid " id="kontak">
      <div class="my-auto">
          <div class="row">
          <div class="col-md-4 p-0" id="">
            <p>Kirimkan feedback atau report Anda</p>
            <form action="" id="">
              <input class="form-control" type="text" name="nama" placeholder="Nama" required="">
              <input class="form-control" type="text" name="email" placeholder="Email" required="">
              <input class="form-control" type="text" name="pesan" placeholder="Pesan" required="">
              <button type="button" class="btn btn-info ">KIRIM</button>
            </form>
          </div>

          <div class="col-md-6 offset-md-2 p-0" id="kontaks">
            <br><br><br><br><br>
            <span class="textkontaks">credit for FIT UII | Department of Informatics</span>
            <span>team dev eLogistic</span>
            <span>reference by template &copy bootstrap</span>
            <br><br>
            <span>Yogyakarta</span><br>
            <span>Indonesia</span>

          </div>
          </div>
      </div>
    </section>
  </div>
  <!-- ======================================================================================================================-->

  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>/assets/js/resume.js"></script>

</body>

</html>
