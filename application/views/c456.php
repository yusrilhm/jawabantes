<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item active">Data Karyawan</li>
                </ol>
            </div>
            <h4 class="page-title" id='tr'>Data Karyawan</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-sm-12">
        <div class="card-box table-responsive">
            <table id="dttable" class="table table-bordered table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Operasi</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                        <th>Departemen</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="col-lg-4 col-sm-12">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-custom" id="lbljudul">Form Tambah Data</div>
                    <div class="form-row m-b-0" style="margin-top: 45px;">
                        <div class="form-group col-md-12">
                            <label class="col-form-label">ID Karyawan</label>
                            <input type="text" class="form-control khusus_angka" id="txtid" placeholder="otomatis by sistem" readonly>
                        </div>

                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">NIK</label>
                            <input type="text" maxlength="16" class="form-control khusus_angka" id="txtnik" >
                        </div>

                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Nama Karyawan</label>
                            <input type="text" class="form-control khusus_abjad2" id="txtnama" placeholder="ex : budi">
                        </div>
                        <div class="form-group col-md-6 jedaobjek">
                            <label class="col-form-label">Tempat Lahir</label>
                            <input type="text" class="form-control khusus_abjad2" id="txttpt" placeholder="ex : jombang">
                        </div>
                        <div class="form-group col-md-6 jedaobjek">
                            <label class="col-form-label">Tanggan Lahir</label>
                            <input type="date" class="form-control khusus_abjad2" id="txttgl" >
                        </div>
                        
                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Pendidikan</label>
                            <select class="form-control select2" id="txtpend">
                                <option value="">Pilih Salah Satu</option>
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Level</label>
                            <select class="form-control select2" id="txtlvl">
                                <option value="">Pilih Salah Satu</option>
                                <?php
                                    if(is_array($dtlevel)){
                                        foreach ($dtlevel as $pr){
                                            $id = $pr->id;
                                            $level = $pr->nama_level;
                                            echo "<option value='$id'>$level</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Departemen</label>
                            <select class="form-control select2" id="txtdpr">
                                <option value="">Pilih Salah Satu</option>
                                <?php
                                    if(is_array($dtdepartemen)){
                                        foreach ($dtdepartemen as $pr){
                                            $iddpr = $pr->id;
                                            $departemen = $pr->nama_departemen;
                                            echo "<option value='$iddpr'>$departemen</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Alamat</label>
                            <input type="text" class="form-control khusus_abjad2" id="txtalamat" >
                        </div>
                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Status</label>
                            <select class="form-control select2" id="txtstatus">
                                <option value="">Pilih Salah Satu</option>
                                <option value="Y">Aktif</option>
                                <option value="N">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 jedaobjek">
                            <label class="col-form-label">Username</label>
                            <input type="text" class="form-control khusus_abjad2" id="txtuser" >
                        </div>
                    </div>
                    <div class="form-row m-b-0">
                        <div class="form-group col-md-12" id="bloktombol"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-12 col-sm-12">
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-custom">Form Cetak</div>
                    <div class="form-row m-b-0" style="margin-top: 45px;">
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-warning" onclick="cetakpdf()">Cetak PDF</button>&nbsp
                            <button type="button" class="btn btn-success" onclick="cetakexcel()">Cetak Excel</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

</div>

<script>
    var dpt ="<?= $dpt; ?>";
    var tbldata = $("#dttable").DataTable({"ajax": "<?= base_url('Sistem/karyawanJSON'); ?>"});
    refresh();

    function refresh(){
        $("#txtid").val("");
        $("#txtnik").val("");
        $("#txtnama").val("");
        $("#txttpt").val("");
        $("#txttgl").val("");
        $("#txtpend").val("").change();
        $("#txtlvl").val("").change();
        $("#txtdpr").val("").change();
        $("#txtalamat").val("");
        $("#txtstatus").val("").change();
        $("#txtuser").val("");
        $("#lbljudul").html('Form Tambah Data');
        $("#txtid").attr("readonly", true);
        let btn = "";
        if(dpt == "5"){
            btn = '<button type="button" class="btn btn-success" onclick="tambah()">Tambahkan</button>&nbsp<button type="button" class="btn btn-danger" onclick="refresh()">Kosongkan</button>';
        }else[
            btn = '<button type="button" class="btn btn-danger" onclick="refresh()">Kosongkan</button>'
        ]
        $("#bloktombol").html(btn);
    }

    function tambah(){
        var nik = $("#txtnik").val();
        var nama = $("#txtnama").val();
        var tempat = $("#txttpt").val();
        var tanggal = $("#txttgl").val();
        var pendidikan = $("#txtpend").val();
        var level = $("#txtlvl").val();
        var departemen = $("#txtdpr").val();
        var alamat = $("#txtalamat").val();
        var status = $("#txtstatus").val();
        var  username = $("#txtuser").val();

        if(nik == "" || nama == "" || tempat == "" || tanggal == "" || pendidikan == "" || level == "" || departemen == "" || alamat == "" || status == "" || username == ""){
            swal({title: 'Gagal', text: 'Ada Isian yang Belum Anda Isi !', type: 'error'});
            return;
        }

        $.ajax({
            url: "<?= base_url('Sistem/tambahkaryawan'); ?>",
            method: "POST",
            data: {nk: nik, nm: nama, tp: tempat, tgl: tanggal, pend: pendidikan, lv: level, dep: departemen, alm: alamat, stat: status, user: username },
            cache: "false",
            success: function(x){
                if(x == 1){
                    swal({title: 'Berhasil', text: 'Data Karyawan Berhasil di Tambahkan', type: 'success'});
                    refresh();
                    tbldata.ajax.reload(null, false);
                }else{
                    swal({title: 'Gagal', text: 'Ada Beberapa Masalah dengan Data yang Anda Isikan !', type: 'error'});
                }
            }
        })
    }

    function update(){
        var id = $("#txtid").val();
        var nik = $("#txtnik").val();
        var nama = $("#txtnama").val();
        var tempat = $("#txttpt").val();
        var tanggal = $("#txttgl").val();
        var pendidikan = $("#txtpend").val();
        var level = $("#txtlvl").val();
        var departemen = $("#txtdpr").val();
        var alamat = $("#txtalamat").val();
        var status = $("#txtstatus").val();
        var  username = $("#txtuser").val();

        if(id == "" || nik == "" || nama == "" || tempat == "" || tanggal == "" || pendidikan == "" || level == "" || departemen == "" || alamat == "" || status == "" || username == ""){
            swal({title: 'Gagal', text: 'Ada Isian yang Belum Anda Isi !', type: 'error'});
            return;
        }


        $.ajax({
            url: "<?= base_url('Sistem/updatekaryawan'); ?>",
            method: "POST",
            data: {id: id, nk: nik, nm: nama, tp: tempat, tgl: tanggal, pend: pendidikan, lv: level, dep: departemen, alm: alamat, stat: status, user: username },
            cache: "false",
            success: function(x){
                if(x == 1){
                    swal({title: 'Berhasil', text: 'Data Karyawan Berhasil di Update', type: 'success'});
                    refresh();
                    tbldata.ajax.reload(null, false);
                }else{
                    swal({title: 'Gagal', text: 'Ada Beberapa Masalah dengan Data yang Anda Isikan !', type: 'error'});
                }
            }
        })
    }    

    function hapus(){
        var id = $("#txtid").val();

        if(id == ""){
            swal({title: 'Gagal', text: 'Data yang akan dihapus Invalid', type: 'error'});
            return;
        }

        swal({
            title: 'Hapus',
            text: "Anda Yakin Ingin Menghapus Data Karyawan Ini ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-confirm mt-2',
            cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function () {
            $.ajax({
                url: "<?= base_url('Sistem/hapuskaryawan'); ?>",
                method: "POST",
                data: {id: id},
                cache: "false",
                success: function(x){
                    if(x == 1){
                        swal({title: 'Berhasil', text: 'Data Karyawan Berhasil di Hapus', type: 'success'});
                        refresh();
                        tbldata.ajax.reload(null, false);
                    }else{
                        swal({title: 'Gagal', text: 'Ada Beberapa Masalah dengan Data yang Anda Isikan !', type: 'error'});
                    }
                }
            })
        })
    }

    function filter(el){
        var id = $(el).data("id");
        $("#txtid").val(id);

        $.ajax({
            url: "<?= base_url('Sistem/filterkaryawan'); ?>",
            method: "POST",
            data: {id: id},
            cache: "false",
            success: function(x){
                var xx = x.split("|");
                if(xx[0] == 1){
                    $("#txtid").val(id);
                    $("#txtnik").val(xx[2]);
                    $("#txtnama").val(xx[3]);
                    $("#txttpt").val(xx[4]);
                    $("#txtalamat").val(xx[5]);
                    $("#txttgl").val(xx[6]);
                    $("#txtpend").val(xx[7]).change();
                    $("#txtstatus").val(xx[8]).change();
                    $("#txtdpr").val(xx[9]).change();
                    $("#txtlvl").val(xx[10]).change();
                    $("#txtuser").val(xx[11]);
                }else{
                    swal({title: 'Gagal', text: 'Data Yang Anda Pilih tidak Tersedia !', type: 'error'});
                    refresh();
                    tbldata.ajax.reload(null, false);
                    return;
                }
            }
        })

        $("#lbljudul").html('Form Kelola Data');
        $("#txtkode").attr("readonly", true);
        $("#bloktombol").html('\
            <button type="button" class="btn btn-info" onclick="update()">Update</button>\
            <button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>\
            <button type="button" class="btn btn-primary" onclick="refresh()">Batal</button>\
        ');
    }

    function cetakpdf(){
        var link = "<?= base_url('Sistem/cetakpdf'); ?>";
        window.open(link, "_blank");
    }

    function cetakexcel(){
        var link = "<?= base_url('Sistem/cetakexcel'); ?>";
        window.open(link, "_blank");
    }
</script>