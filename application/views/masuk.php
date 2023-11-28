<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <title>CodeIgniter | Sample</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Sistem Web Berbasis CodeIgniter" name="description" />
        <meta content="Dinas Sosial Kabupaten Jombang" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico'); ?>">
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/plugins/sweet-alert/sweetalert2.min.css'); ?>" rel="stylesheet" type="text/css" />

        <script src="<?= base_url('assets/js/modernizr.min.js'); ?>"></script>
    </head>

    <body>
        <div class="accountbg" style="background: url('<?= base_url(); ?>assets/images/social2.png'); background-position: center; margin-left: -250px; background-size: contain"></div>
        <div class="wrapper-page account-page-full">
            <div class="card">
                <div class="card-block">
                    <div class="account-box">
                        <div class="card-box p-5">
                            
                            <form class="" action="#">
                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="txtkode">Username</label>
                                        <input class="form-control" type="text" id="txtkode" placeholder="Wajib Isi" onkeyup="pindahpass()">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="txtpass">Password</label>
                                        <input class="form-control" type="password" id="txtpass" placeholder="Wajib Isi" onkeyup="pindahlogin()">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-6">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="button" onclick="login()">Login</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-block btn-custom waves-effect waves-light btn-danger" type="button" onclick="dashboard()">Dashboard</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">@yusril</p>
            </div>

        </div>

        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/waves.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.core.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jquery.app.js'); ?>"></script>
        <script src="<?= base_url('assets/plugins/sweet-alert/sweetalert2.min.js'); ?>"></script>
        <script>
            function dashboard(){
                window.location = '<?= base_url(); ?>';
            }

            function login(){
                var u = $("#txtkode").val();
                var p = $("#txtpass").val();

                if(u == "" || p == ""){
                    swal({
                        title: 'Login Gagal',
                        text: 'Ada Isian yang Masih Kosong !',
                        type: 'error',
                        confirmButtonClass: 'btn btn-confirm mt-2'
                    });
                    return;
                }

                $.ajax({
                    url: "<?= base_url('Login/login'); ?>",
                    method: "POST",
                    data: {u: u, p: p},
                    cache: "false",
                    success: function(x){
                        if(x == 1){
                            window.location = "<?= base_url('Sistem/'); ?>";
                        }else{
                            swal({
                                title: 'Login Gagal',
                                text: 'Kemungkinan Username dan Password Salah atau Status Akun Tidak Aktif',
                                type: 'error',
                                confirmButtonClass: 'btn btn-confirm mt-2'
                            });
                            return;
                        }
                    }
                })
            }

            function pindahpass(){
                if(event.keyCode === 13) {
                    $("#txtpass").focus();
                }
            }

            function pindahlogin(){
                if(event.keyCode === 13) {
                    login();
                }
            }
        </script>

    </body>
</html>