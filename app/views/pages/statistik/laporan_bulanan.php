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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Statistik / Laporan Bulanan</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-warning solid alert-end-icon alert-dismissible fade show">
                                    <!-- <span><i class="mdi mdi-alert"></i></span> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="btn-close">
                                    </button>
                                    <p>Data Penduduk masih dalam proses dilengkapi</p>
                                    <p>Buka Pengaturan <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#mymodal"><strong class="text-white">Data Lengkap <i
                                                    class="fa fa-settings"></i></strong></a> untuk melengkapi tanggal
                                        lengkap data</p>
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
<!-- Modal Add -->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengaturan Data Lengkap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="" class="form-label">Tgl Data Lengkap</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="bx bx-print"></i></div>
                                <input type="date" name="" id="" class="form-control"
                                    placeholder="silahkan pilih tanggal">
                            </div>
                            <small class="text-danger">atur data tanggal sudah lengkap</small>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">tanggal Data Lengkap Aktif</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php' ?>