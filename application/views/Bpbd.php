<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eLogistic | BPBD</title>

  <!-- Memangil link style untuk bootstrap, css, dan fonts google =========================================================-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/tampilan.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/js/editprosedur.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- ====================================================================================================================-->
</head>

<body id="page-top">
  
  <!-- Membuat menu navigasi dan foto profil pengguna di web ==============================================================-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span>
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url(); ?>/assets/img/profil/bpbd.png" alt="">
      </span>
    </a>
      <h3 class="mb-0"><span class="text-head" >BPBD OFFICER</span></h3>
    <br>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#kebutuhan">Info Kebutuhan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#lokasi">Lokasi Bencana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#pengiriman">Pengiriman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#prosedur">Tata Cara</a>
        </li>
      </ul>
    </div>
    <br><br><br><br>
    <span class="logout"><a href="<?php echo site_url('Bpbd/logout')?>"><i class="fas fa-sign-out-alt"> </i> Logout</a></span>
  </nav>
  <!-- ======================================================================================================================-->
  
  <!-- Membuat menu publikasi BPBD ==========================================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section" id="kebutuhan">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">SELAMAT DATANG</span>
        </h3>
        <hr>

      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->


  <!-- Membuat menu publikasi BPBD ==========================================================================================-->
  <div class="container-fluid p-0">
    <section class="resume-section" id="kebutuhan">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PUBLIKASI DATA KEBUTUHAN</span>
        </h3>
        <hr>

        <p class="mb-3">Data kebutuhan dari lokasi</p>
        <div class="col-md-12">  
        <table class="table table-bordered">
          <thead style="text-align: center;">
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
              <td style="text-align: center;"width="50px" scope="row"><?php echo $no++ ?></td>
              <td><?php echo $k['lokasi'] ?></td>
              <td><?php echo $k['kebutuhan'] ?></td>
              <td><?php echo $k['qty'] ?></td>
              <td><?php echo $k['keterangan'] ?></td>
              <td>
               <form action="<?php echo site_url('Bpbd/editStatus/'.$k['id']) ?>" method="POST">
                <div class="input-group md-5">
                   <input class="form-control block" type="text" name="statusedit" placeholder="<?php echo $k['status'] ?>">
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

  <!-- Membuat menu Lokasi BPBD ============================================================================================-->
    <section class="resume-section" id="lokasi">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PUBLIKASI LOKASI BENCANA</span>
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
              <th scope="col">Hapus</th>
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
              <td style="text-align: center;"><a role="button" class="btn btn-warning" href="<?php echo site_url('Petugas/deleteLokasi/'.$l['id']) ?>" onclick="return confirm('Anda ingin menghapus data?')">&#10006;</a></td>
            </tr>

            <?php } ?>
          
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu Pengiriman logistik BPBD ==================================================================================-->
    <section class="resume-section" id="pengiriman">
      <div class="my-auto">
        <h3 class="mb-0">
          <span class="text-primary">PENGIRIMAN BARANG</span>
        </h3>
        <hr>

        <p class="mb-3">Inputkan data barang donasi yang akan di kirimkan</p>
        <div class="col-md-12">         
        <form action="<?php echo site_url('Bpbd/insertPengiriman') ?>" method="POST">
              <table>
                <tr><td><input class="form-control" type="text" name="donatur" placeholder="Nama Donatur"></td></tr>
                <tr><td><input class="form-control" type="text" name="barang" placeholder="Barang"></td></tr>
                <tr><td><input class="form-control" type="text" name="qty" placeholder="QTY"></td></tr>
                <tr><td><input class="form-control" type="text" name="kepada_lokasi" placeholder="Kepada Lokasi"></td></tr>
                <tr><td><input class="form-control" type="text" name="keterangan" placeholder="Keterangan"></td></tr>
                <tr><td><input class="form-control btn-primary col-sm-3" type="submit" name="addPengiriman" value="Tambah"></td></tr>
              </table>
            </form>
      </div>
      </div>
    </section>
    <hr class="m-0">
  <!-- ======================================================================================================================-->

  <!-- Membuat menu tata cara pengiriman BPBD ===========================================================================================-->
    <section class="resume-section" id="prosedur">
      <div class="my-auto">
        <h3 class="mb-0"><span class="text-primary">TATA CARA PENGIRIMAN BARANG</span></h3>
        <hr> 
        <p class="mb-3">Berikut merupakan tata cara pengiriman dengan eLogistic</p>

        <form action="<?php echo site_url('Bpbd/insertProsedur') ?>" method="POST">
          <table>
            <tr>
              <input class="form-control col-sm-11" type="text" name="prosedur" placeholder="Tuliskan Prosedur">
              <input class="form-control btn-primary col-sm-1" type="submit" name="addProsedur" value="Tambah">
            </tr>
          </table>
        </form>
        
        <br>  
        <hr>  

        <table class="table table-borderless">
          <tbody>
            <?php 
            $no = 1;
            foreach($hasilnya as $r){ ?>
            
            <tr>
              <td width="50px" scope="row"><?php echo $no++?></td>
              <td><?php echo $r['prosedur'] ?></td>
              <td><a data-toggle="modal" data-target="#modalEdit" href="<?php echo site_url('Bpbd/editProsedur/'.$r['id']) ?>"> &#9999;</a></td>
              
              <!-- Modal edit-->
              <div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLongTitle">EDIT PROSEDUR</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form action="<?php echo site_url('Bpbd/editProsedur/'.$r['id']) ?>" method="POST">
                        <input class="form-control block" type="text" name="ubahprosedur" placeholder="Masukan prosedur baru">
                        <button class="btn btn-primary" type="submit" name="editProsedur">Simpan</button>
                        <br><br><br>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
              <td><a href="<?php echo site_url('Bpbd/deleteProsedur/'.$r['id']) ?>" onclick="return confirm('Anda ingin menghapus data?')">&#10006;</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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
