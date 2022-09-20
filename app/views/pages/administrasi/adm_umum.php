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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Administrasi Desa / Administrasi Umum </a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item active">
                                <a href="#" class="text-white">
                                    <i class="fa fa-list"></i>
                                    Buku Peraturan Desa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Keputusan Kepala Desa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Iventaris dan Kekayaan Desa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Aparat Pemerintah Desa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Tanah Kas Desa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Tanah Didesa
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Agenda - Surat Keluar
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Agenda - Surat Masuk
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Ekspedisi
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <i class="fa fa-arrow-right"></i>
                                    Buku Lembaran Desa dan Berita Desa
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-xxs btn-success">
                                    <i class="fa fa-plus"></i>
                                    Tambah Perdes Baru
                                </button>
                                <button class="btn btn-xx btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Hapus Data Terpilih
                                </button>
                                <button class="btn btn-xxs btn-info">
                                    <i class="fa fa-print"></i>
                                    Cetak
                                </button>
                                <button class="btn btn-xxs btn-dark">
                                    <i class="fa fa-download"></i>
                                    Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" name="" id="">
                                                </th>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Judul</th>
                                                <th>Jenis Peraturan</th>
                                                <th>No./Tgl Ditetapkan</th>
                                                <th>Uraian Singkat</th>
                                                <th>Aktif</th>
                                                <th>Dimuat Pada</th>
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