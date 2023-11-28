<!doctype html>
<html lang="en">
    <head>
        <title>CodeIgniter | Sample</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Sistem Web Berbasis CodeIgniter" name="description" />
        <meta content="Dinas Sosial Kabupaten Jombang" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
        <link href="<?= base_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/metismenu.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/plugins/custombox/css/custombox.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/plugins/sweet-alert/sweetalert2.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/plugins/bootstrap-select/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/plugins/switchery/switchery.min.css'); ?>" rel="stylesheet" >
        <link href="<?= base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/plugins/dropzone/dropzone.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/plugins/spinkit/spinkit.css'); ?>" rel="stylesheet" type="text/css" />
        
        <script src="<?= base_url('assets/js/modernizr.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/custombox/js/custombox.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/custombox/js/legacy.min.js'); ?>"></script>

        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/datatables/responsive.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/dropzone/dropzone.js'); ?>"></script>

        <script src="<?= base_url('assets/plugins/highcharts/highcharts.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/highcharts/highcharts-3d.js'); ?>"></script>
        <script src="<?= base_url('assets/js/fungsi.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/sweet-alert/sweetalert2.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/luckmoshyJqueryPagnation.js'); ?>"></script>
        <style>
            .tengah {text-align: center;}
            .tengah2 {vertical-align: middle;}
            .jedaobjek {margin-top: -15px;}
        </style>

    </head>

    <body>
        <div id="wrapper">
            

            <div class="content-page" style="margin-left: -10px;">

                <div class="topbar">
                    <nav class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url('assets/images/users/avatar-1.jpg'); ?>" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Atur Akun <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#modal-password">
                                        <i class="fi-cog"></i> <span>Password</span>
                                    </a>
                                    <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#modal-signout">
                                        <i class="fi-lock"></i> <span>Sign Out</span>
                                    </a>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title" style="font-size: 30px">Selamat Datang <?= $nm; ?> </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Username Anda: <?= $usrnm; ?></li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>
                </div>

                <div class="content">
                    <div class="container-fluid">
                    	<?php include $fill.".php"; ?>
                    </div>
                </div>

                <footer class="footer" >
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                @yusril
                            </div>
                        </div>
                    </div>
                </footer>

                <div id="modal-password" class="modal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Ganti Password</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-4 jedaobjek">
                                        <label class="col-form-label">Password Lama</label>
                                        <input type="password" class="form-control" id="txtp1" placeholder="Wajib">
                                    </div>
                                    <div class="form-group col-md-4 jedaobjek">
                                        <label class="col-form-label">Password Baru</label>
                                        <input type="password" class="form-control" id="txtp2" placeholder="Wajib">
                                    </div>
                                    <div class="form-group col-md-4 jedaobjek">
                                        <label class="col-form-label">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" id="txtp3" placeholder="Wajib">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" onclick="gantipassword()">Ganti Password</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modal-signout" class="modal" role="dialog">
                    <div class="modal-dialog modals">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Signout</h4>
                            </div>
                            <div class="modal-body">
                                Anda Yakin Ingin Signout dari Sistem ?
                            </div>
                            <div class="modal-footer">
                                <form method="POST" action="<?= base_url('Sistem/logout'); ?>">
                                    <button type="submit" class="btn btn-danger" name="btnsignout">Yakin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/metisMenu.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/waves.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.core.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.app.js'); ?>"></script>
        <script src="<?= base_url('assets/js/restricted.js'); ?>"></script>
        <script>
            $(".select2").select2();         

            function gantipassword(){
                var plama = $("#txtp1").val();
                var pbaru = $("#txtp2").val();
                var kbaru = $("#txtp3").val();
            
                if(plama == "" || pbaru == "" || kbaru == ""){
                    swal({title: 'Ganti Password Gagal', text: 'Ada Isian yang Belum Anda Isi !', type: 'error'});
                    return;
                }

                if(pbaru != kbaru){
                    swal({title: 'Ganti Password Gagal', text: 'Konfirmasi Password Baru Salah', type: 'error'});
                    return;
                }

                $.ajax({
                    url: "<?= base_url('Sistem/gantipassword'); ?>",
                    method: "POST",
                    data: {plama: plama, pbaru: pbaru},
                    cache: "false",
                    success: function(x){
                        if(x == 1){
                            swal({
                                title: 'Berhasil',
                                text: "Password Berhasil di Ubah, Sistem akan Logout !",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonClass: 'btn btn-confirm mt-2',
                                confirmButtonText: 'Ok'
                            }).then(function () {
                                window.location = "";
                            })
                        }else{
                            swal({title: 'Gagal', text: 'Password Gagal di Ganti, Silahkan Cek Password Lama Anda', type: 'error'});
                        }
                    }
                })
            }
        </script>
    </body>
</html>