<?php require APPROOT . '/views/inc/index.php' ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- title -->
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Penduduk / Kependudukan</a></li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success btn-xxs"
                                            data-bs-toggle="dropdown"><i class="fa fa-plus"></i> Tambah
                                            Penduduk</button>
                                        <button type="button"
                                            class="btn btn-success btn-xxs dropdown-toggle dropdown-toggle-split">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-plus"></i>
                                                Penduduk Lahir
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-plus"></i>
                                                Penduduk Masuk
                                            </a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger btn-xxs">
                                            <i class="fa fa-trash"></i>
                                            Hapus Data Terpilih
                                        </button>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary btn-xxs">
                                            <i class="fa fa-download"></i>
                                            Plih Aksi Lainnya
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary btn-xxs dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-print"></i>
                                                Cetak
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>
                                                Unduh
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-search"></i>
                                                Pencarian Spesifik
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-search"></i>
                                                Pencarian Program Bantuan
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-users"></i>
                                                Pilhan Kumpulan NIK
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-search"></i>
                                                NIK Sementera
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-book"></i>
                                                Log Penduduk
                                            </a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-dark btn-xxs">
                                            <i class="fa fa-download"></i>
                                            Import / Eksport
                                        </button>
                                        <button type="button"
                                            class="btn btn-dark btn-xxs dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-download"></i>
                                                Ekspor Penduduk
                                            </a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info btn-xxs">
                                            <i class="fa fa-sync-alt"></i>
                                            Bersihkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row pb-2">
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="" id="">
                                        <option value="">Status Penduduk</option>
                                        <option value="tetap">Tetap</option>
                                        <option value="tidak tetap">Tidak Tetap</option>
                                    </select>
                                    <select class="form-control" name="" id="">
                                        <option value="">Status Dasar</option>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Mati">Mati</option>
                                        <option value="Hilang">Hilang</option>
                                        <option value="Pergi">Pergi</option>
                                        <option value="Pindah">Pindah</option>
                                        <option value="Tidak Valid">Tidak Valid</option>
                                    </select>
                                    <select class="form-control" name="" id="">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <select class="form-control">
                                        <option value="">Pilih Dusun</option>
                                        <option value="loco">Loco</option>
                                        <option value="Kerendangan">Kerendangan</option>
                                        <option value="Senggigi">Senggigi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>
                                                    <input type="checkbox" name="" id="">
                                                </th>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Foto</th>
                                                <th>Tag ID Card</th>
                                                <th>Nama</th>
                                                <th>No.KK</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>No.Rumah Tangga</th>
                                                <th>Alamat</th>
                                                <th>Dusun</th>
                                                <th>RW</th>
                                                <th>RT</th>
                                                <th>PENDIDIKAN DALAM KK</th>
                                                <th>UMUR</th>
                                                <th>PEKERJAAN</th>
                                                <th>KAWIN</th>
                                                <th>TGL Peristiwa</th>
                                                <th>TGL Terdaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
<?php require APPROOT . '/views/inc/footer.php' ?>