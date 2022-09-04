<?php require APPROOT .'/views/inc/index.php' ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- title -->
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Penduduk / Kependudukan / Tambah Data</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <!-- Upload File -->
            <div class="col-lg-3">
                <div class="card" style="height: 50%;">
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <button class="btn btn-primary btn-xxs">
                                    <i class="fa fa-left-row"></i>
                                    Kembali Ke Daftar Penduduk
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Lapor</label>
                                        <div class="input-group">
                                            <i class="fa fa-date"></i>
                                            <input type="date" name="" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Data Diri  -->
                            <div class="row pt-4">
                                <div class="col-lg-12 bg-primary">
                                    <h5 class="pt-2 text-white">DATA DIRI :</h5>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <input type="checkbox" name="" id=""
                                                    style="margin-right: 10px;border-radius: 1px;">
                                            </span>
                                            <input type="text" name="" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap <small class="text-danger">(Tanpa
                                                Gelar)</small></label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="form-group">
                                    <label for="">Status Kepemilikan Identitas</label>
                                    <div class="row">
                                        <div class="col-md-3 bg-secondary">
                                            <h5 class="pt-1">Wajib Identitas</h5>
                                        </div>
                                        <div class="col-md-3 bg-secondary">
                                            <h5 class="pt-1">Wajib Electronic</h5>
                                        </div>
                                        <div class="col-md-3 bg-secondary">
                                            <h5 class="pt-1">Status Rekam</h5>
                                        </div>
                                        <div class="col-md-3 bg-secondary">
                                            <h5 class="pt-1">Tag ID Card</h5>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-md-3">
                                            <h5>BELUM WAJIB</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="" id="" class="form-control">
                                                <option value="">Pilih Identitas - EL</option>
                                                <opdtion value="Belum">Belum</opdtion>
                                                <option value="KTP-EL">KTP - EL</option>
                                                <option value="KIA">KIA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="" id="" class="form-control">
                                                <option value="">Pilih Status Rekam</option>
                                                <option value="Belum Rekam">Belum Rekam</option>
                                                <option value="Sudah Rekam">Sudah Rekam</option>
                                                <option value="Card Printed">Card Printed</option>
                                                <option value="Print Ready Record">Print Ready Record </option>
                                                <option value="Card Shipped">Card Shipped</option>
                                                <option value="Sent For Card Print">Sent For Card Print</option>
                                                <option value="Card Issued">Card Issued</option>
                                                <option value="Belum Wajib">Belum Wajib</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Tag ID Card">
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="" class="form-label">Nomor KK Sebelumnya</label>
                                                <input type="text" name="" id="" class="form-control"
                                                    placeholder="nomor kk sebelumnyas">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Hubungan Dalam Keluarga</label>
                                            <select class="form-control" name="hubungan" id="hubungan">
                                                <option value="">Pilih Hubungan Keluarga</option>
                                                <option value="KEPALA KELARGA">KEPALA KELARGA</option>
                                                <option value="SUAMI">SUAMI</option>
                                                <option value="ISTRI">ISTRI</option>
                                                <option value="ANAK">ANAK</option>
                                                <option value="MENANTU">MENANTU</option>
                                                <option value="CUCU">CUCU</option>
                                                <option value="MERTUA">MERTUA</option>
                                                <option value="MENANTU">MENANTU</option>
                                                <option value="PEMBANTU">PEMBANTU</option>
                                                <option value="FAMILI LAIN">FAMILI LAIN</option>
                                                <option value="LAINNYA">LAINNYA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Jenis Kelamin</label>
                                            <select name="jk" id="jk" class="form-control">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Agama</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Agama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Status Penduduk</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih status Penduduk</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Data Diri -->

                            <!-- Data Kelahiran -->
                            <div class="row pt-2">
                                <div class="col-lg-12 bg-primary">
                                    <h5 class="pt-2 text-white">DATA KELAHIRAN :</h5>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nomor Akta Kelahiran</label>
                                        <input type="text" name="nomor_akta" id="nomor_akta" class="form-control"
                                            placeholder="Nomor Akta Kelahiran">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempatlahir" id="tempatlahir" class="form-control"
                                            placeholder="Tempat Lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                                            <input type="date" name="tgllahir" id="tgllahir" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Waktu Kelahiran</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                                            <input type="time" name="waktu_lahir" id="waktu_lahir" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Tempat dilahirkan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                                            <select name="" id="" class="form-control">
                                                <option value="">Pilih Tempat Dilahirkan</option>
                                                <option value="PUSKESMAS">Puskemas</option>
                                                <option value="RS/RB">RS/RB</option>
                                                <option value="POLINDES">POLINDES</option>
                                                <option value="RUMAH">RUMAH</option>
                                                <option value="LAINNYA">LAINNYA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Jenis Kelahiran</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Jenis Kelahiran</option>
                                            <option value="TUNGGAL">TUNGGAL</option>
                                            <option value="KEMBAR 2">KEMBAR 2</option>
                                            <option value="KEMBAR 3">KEMBAR 3</option>
                                            <option value="KEMBAR 4">KEMBAR 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-grou">
                                        <label for="" class="form-label">Anak Ke <small class="text-danger">(isi dengan
                                                angka)</small></label>
                                        <input type="number" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-grou">
                                        <label for="" class="form-label">Penolong Kelahiran</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Penolong Kelahiran</option>
                                            <option value="DOKTER">DOKTER</option>
                                            <option value="BIDAN PERAWAT">BIDAN PERAWAT</option>
                                            <option value="DUKUN">DUKUN</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">
                                            Berat Lahir
                                            <small class="text-danger">
                                                ( Gram )
                                            </small>
                                        </label>
                                        <input type="text" name="berat_lahir" id="berat_lahir" class="form-control"
                                            placeholder="Berat Lahir">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">
                                            Panjang Lahir
                                            <small class="text-danger">( cm )</small>
                                        </label>
                                        <input type="text" name="panjang_lahir" id="panjang_lahir" class="form-control"
                                            placeholder="Panjang Lahir">
                                    </div>
                                </div>
                            </div>
                            <!-- End Data Kelahiran -->

                            <!-- Pendidikan dan Pekerjaan  -->
                            <div class="row pt-2">
                                <div class="col-lg-12 bg-primary">
                                    <h5 class="pt-2 text-white">PENDIDIKAN DAN PEKERJAAN</h5>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Pendidikan dalam KK</label>
                                        <select class="form-control" name="pendidikan_dalam_kk"
                                            id="pendidikan_dalam_kk">
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                            <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                            <option value="TAMAT SMP / SEDERAJAT">TAMAT SMP / SEDERAJAT</option>
                                            <option value="TAMAT SLTA / SEDERAJAT">TAMAT SLTA / SEDERAJAT</option>
                                            <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                                            <option value="AKADEMI / DIPLOMA III/S.MUDA">AKADEMI / DIPLOMA III/S.MUDA
                                            </option>
                                            <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I
                                            </option>
                                            <option value="STRATA II">STRATA II</option>
                                            <option value="STRATA III">STRATA III</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-group">Pendidikan Sedang ditempuh</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="BELUM MASUK TK/KELOMPOK BERMAIN">BELUM MASUK TK/KELOMPOK
                                                BERMAIN</option>
                                            <option value="SEDANG TK/KELOMPOK BERMAIN"></option>
                                            <option value="TIDAK PERNAH SEKOLAH">TIDAK PERNAH SEKOLAH</option>
                                            <option value="SEDANG SD/SEDARAJAT">EDANG SD/SEDARAJAT</option>
                                            <option value="TIDAK TAMAT/SEDARAJAT">TIDAK TAMAT/SEDARAJAT</option>
                                            <option value="SEDANG SMP/SEDARAJAT">SEDANG SMP/SEDARAJAT</option>
                                            <option value="SEDANG SLTA/SEDERAJAT">SEDANG SLTA/SEDERAJAT</option>
                                            <option value="SEDANG D-1/SEDERAJAT">SEDANG D-1/SEDERAJAT</option>
                                            <option value="SEDANG D-2/SEDERAJAT">SEDANG D-2/SEDERAJAT</option>
                                            <option value="SEDANG D-3/SEDERAJAT">SEDANG D-3/SEDERAJAT</option>
                                            <option value="SEDANG S-1/SEDERAJAT">SEDANG S-1/SEDERAJAT</option>
                                            <option value="SEDANG S-2/SEDERAJAT">SEDANG S-2/SEDERAJAT</option>
                                            <option value="SEDANG S-3/SEDERAJAT">SEDANG S-3/SEDERAJAT</option>
                                            <option value="SEDANG SLB-A/SEDERAJAT">SEDANG SLB-A/SEDERAJAT</option>
                                            <option value="SEDANG SLB-B/SEDERAJAT">SEDANG SLB-B/SEDERAJAT</option>
                                            <option value="TIDAK SEDANG SEKOLAH">TIDAK SEDANG SEKOLAH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Pekerjaan</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="BELUM ATAU TIDAK BEKERJA">BELUM ATAU TIDAK BEKERJA</option>
                                            <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                            <option value="PELAJAR/MAHASISWA">PELAJAR/MAHASISWA</option>
                                            <option value="PENSIUNAN">PENSIUNAN</option>
                                            <option value="PEGAWAI NEGERI SIPIL (PNS)">PEGAWAI NEGERI SIPIL (PNS)
                                            </option>
                                            <option value="TENTARA NASIONAL INDONESIA (TNI)">TENTARA NASIONAL INDONESIA
                                                (TNI)
                                            </option>
                                            <option value="KEPOLISIAN (POLRI)">KEPOLISIAN (POLRI)</option>
                                            <option value="PERDAGANGAN">PERDAGANGAN</option>
                                            <option value="PETANI/PEKEBUN">PETANI/PEKEBUN</option>
                                            <option value="PETERNAK">PETERNAK</option>
                                            <option value="NELAYANA/PERIKANAN">NELAYANA/PERIKANAN</option>
                                            <option value="INDUSTRI">INDUSTRI</option>
                                            <option value="KONTRUKSI">KONTRUKSI</option>
                                            <option value="TRANSPORTASI">TRANSPORTASI</option>
                                            <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                            <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Pendidikan dan Pekerjaan -->

                            <!-- Data Kewarganegaraan -->
                            <div class="row pt-3">
                                <div class="col-lg-12 bg-primary">
                                    <h5 class="pt-2 text-white">DATA KEWARGANEGARAAN</h5>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Suku/Etnis</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Plih Suku/Etnis</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="form-label">Pilih Warga Negara</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">Pilih Warga Negara</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                            <option value="DUA KEWARGANEGARAAN">DUA KEWARGANEGARAAN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Data Kewaranegaraan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
***********************************-->
<?php require APPROOT .'/views/inc/footer.php' ?>