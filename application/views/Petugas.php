<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eLogistic | Petugas</title>

  <!-- Memangil link style untuk bootstrap, css, dan fonts google =========================================================-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/tampilan.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- ====================================================================================================================-->
</head>

<body id="page-top">
  
  <!-- Membuat menu navigasi dan foto profil pengguna di web ==============================================================-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span>
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url(); ?>/assets/img/profil/petugas.png" alt="">
      </span>
    </a>
      <h3 class="mb-0"><span class="text-head" >PETUGAS</span></h3>
      

    <br>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#kebutuhan">Kebutuhan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#lokasi">Laporkan Lokasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#konfirmasi">Validasi Terima</a>
        </li>
      </ul>
    </div>
    <br><br><br><br>
     <span class="logout"><a href="<?php echo site_url('Petugas/logout')?>"><i class="fas fa-sign-out-alt"> </i> Logout</a></span>
  </nav>
  <!-- ======================================================================================================================-->
 
  <!-- Membuat menu publikasi kebutuhan ==========================================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section" id="kebutuhan">
      <div class="my-auto">
        <h3 class="mb-0"><span class="text-primary">LAPORKAN KEBUTUHAN LOGISTIK</span></h3>
        <hr> 
        <p class="mb-3">Laporkan data kebutuhan lokasi bencana</p>
            <form action="<?php echo site_url('Petugas/insertKebutuhan') ?>" method="POST">
              <table>
                <tr><td><input class="form-control" type="text" name="lokasi" placeholder="Lokasi"></td></tr>
                <tr><td><input class="form-control" type="text" name="kebutuhan" placeholder="Barang"></td></tr>
                <tr><td><input class="form-control" type="text" name="qty" placeholder="QTY"></td></tr>
                <tr><td><input class="form-control" type="text" name="keterangan" placeholder="Keterangan"></td></tr>
                <tr><td><input class="form-control btn-primary col-sm-3" type="submit" name="addKebutuhan" value="Tambah"></td></tr>
              </table>
            </form>
          </div>

          <div class="col-md-5"></div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

    <!-- Membuat menu laporan lokasi bencana ==============================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section" id="lokasi">
      <div class="my-auto">
        <h3 class="mb-0"><span class="text-primary">LAPORKAN LOKASI BENCANA</span></h3>
        <hr> 
        <p class="mb-3">Informasi lokasi bencana terbaru</p>
            <form action="<?php echo site_url('Petugas/insertLokasi') ?>" method="POST">
              <table>
                <tr><td><input class="form-control" type="text" name="jenis" placeholder="Jenis Bencana"></td></tr>
                <tr><td><input class="form-control" type="text" name="alamat" placeholder="Alamat"></td></tr>
                <tr><td><input class="form-control" type="text" name="kabupaten" placeholder="Kabupaten/Kota"></td></tr>
                <tr><td><input class="form-control" type="text" name="provinsi" placeholder="Provinsi"></td></tr>
                <tr><td><input class="form-control" type="text" name="keterangan" placeholder="Keterangan"></td></tr>
                <tr><td><button type="submit" class="btn btn-primary">POST</button></tr>
              </table>
            </form>
          </div>

          <div class="col-md-5"></div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu Kontrol BPBD ============================================================================================-->
    <section class="resume-section" id="konfirmasi">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">KONFIRMASI PENERIMAAN BARANG</span>
        </h3>
        <hr>

        <p class="mb-3">Daftar Logistik Masuk</p>
        <div class="col-md-12">         
        <table class="table table-bordered">
          <thead style="text-align: center;" >
            <tr>
              <th scope="col">id</th>
              <th scope="col">Donatur</th>
              <th scope="col">Barang</th>
              <th scope="col">QTY</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Validasi</th>
              </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($pengiriman as $p){ ?>
            
            <tr>
              <td style="text-align: center;" width="50px" scope="row"><?php echo $no++ ?></td>
              <td><?php echo $p['donatur'] ?></td>
              <td><?php echo $p['barang'] ?></td>
              <td><?php echo $p['qty'] ?></td>
              <td><?php echo $p['kepada_lokasi'] ?></td>
              <td><?php echo $p['keterangan'] ?></td>
              <td>
               <form action="<?php echo site_url('Petugas/editPengiriman/'.$p['id']) ?>" method="POST">
                <div class="input-group md-5">
                   <input class="form-control block" type="text" name="statusedit" placeholder="<?php echo $p['status'] ?>">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Update</button>
                  </div>
                </div>
              </form>
              </td>
            </tr>

            <?php } ?>
          
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url(); ?>/assets/js/resume.js"></script>

</body>

</html>
