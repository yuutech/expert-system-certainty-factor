<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPARU - Sistem Pakar Paru - Paru</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                                <a class="navbar-brand" href="dashboard.php"><span>ADMIN</span></a>
                <a class="navbar-brand hidden" href="dashboard.php"><span>ADMIN</span></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Sistem Pakar</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="dt_penyakit.php"> <i class="menu-icon fa fa-book"></i>Data Penyakit</a>
                    </li>
                    <li>
                        <a href="dt_gejala.php"> <i class="menu-icon fa fa-list-alt"></i>Data Gejala</a>
                    </li>
                    <li>
                        <a href="dt_relasi.php"> <i class="menu-icon fa fa-sitemap"></i>Relasi / Rule</a>
                    </li>
                    <li>
                        <a href="dt_pasien.php"> <i class="menu-icon fa fa-user"></i>Data Pasien</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Ganti Password</a>

                                <a class="nav-link" href="php/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data Penyakit</a></li>
                            <li class="active">Tambah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Penyakit</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <?php 
                              include('php/db_connect.php');
                              $id = $_GET['kd_penyakit'];
                              $query_obat = "SELECT * FROM penyakit WHERE kd_penyakit = '$id'";
                              $st=mysqli_query($link,$query_obat);
                              $dt=mysqli_fetch_array($st);

                            ?>
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="php/update_penyakit.php" method="post">
                                      <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Kode</label>
                                          <input name="kd_penyakit" type="text" class="form-control" aria-required="true" aria-invalid="false" readonly value="<?php echo $dt['kd_penyakit'] ; ?>">
                                      </div>
                                      <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Nama Penyakit</label>
                                          <input name="nm_penyakit" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $dt['nm_penyakit'] ; ?>">
                                      </div>
                                      <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Deskripsi Penyakit</label>
                                          <textarea name="deskripsi" id="textarea-input" rows="3" placeholder="Content..." class="form-control"><?php echo $dt['deskripsi'] ; ?></textarea>
                                      </div>
                                      <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Pencegahan Penyakit</label>
                                          <textarea name="pencegahan" rows="6" placeholder="Content..." class="form-control"><?php echo $dt ['pencegahan']; ?></textarea>
                                      </div>
                                      <div class="form-group has-success">
                                          <label for="cc-name" class="control-label mb-1">Pengobatan Penyakit</label>
                                          <textarea name="pengobatan" rows="6" placeholder="Content..." class="form-control"><?php echo $dt ['pengobatan']; ?></textarea>
                                      </div>
                                      <div>
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              <!-- <i class="fa fa-paperclip fa-lg"></i>&nbsp; -->
                                              <span id="payment-button-amount">Perbaharui</span>
                                              <span id="payment-button-sending" style="display:none;">Sending…</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->
                  </div><!--/.col-->


                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
