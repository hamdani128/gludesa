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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Wilayah Administratif / infodesa</a></li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-3">
                <div class="card ">
                    <div class="card-header">
                        <h5>Kategori Lembaga</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- <table class="table table-hover table-responsive table-striped">
                                <tr>
                                    <td>Gokil</td>
                                </tr>
                            </table> -->
                        </div>
                        <div class="row">
                            <button class="btn btn-md btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success btn-xxs">
                                    <i class="fa fa-plus"></i>
                                    </span>Tambah Lembaga Baru
                                </button>
                                <button type="button" class="btn btn-danger btn-xxs">
                                    <i class="fa fa-trush"></i>
                                    </span>Hapus Data Terpilih
                                </button>
                                <button type="button" class="btn btn-info btn-xxs">
                                    <i class="fa fa-print"></i>
                                    </span>Cetak
                                </button>
                                <button type="button" class="btn btn-dark btn-xxs">
                                    <i class="fa fa-download"></i>
                                    </span>Unduh
                                </button>
                                <button type="button" class="btn btn-primary btn-xxs">
                                    <i class="fa fa-sync-alt"></i>
                                    </span>Bersihkan
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
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th><input type="checkbox" name="" id="" class="form-control"></th>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Kode Lembaga</th>
                                                <th>Nama Lembaga</th>
                                                <th>Ketua Lembaga</th>
                                                <th>Kategori Lembaga</th>
                                                <th>Jumlah Anggota</th>
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