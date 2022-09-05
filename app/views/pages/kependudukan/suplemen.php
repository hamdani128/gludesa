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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Kependudukan / Data Suplemen
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#mymodal"
                                            class="btn btn-success btn-xxs" data-bs-toggle="dropdown"><i
                                                class="fa fa-plus"></i>
                                            Tambah Suplemen Baru
                                        </button>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary btn-xxs">
                                            <i class="fa fa-question"></i>
                                            Panduan
                                        </button>
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
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <select class="form-control" name="" id="">
                                        <option value="">Pilih Saran</option>
                                        <option value="penduduk">Penduduk</option>
                                        <option value="keluarga / KK">keluarga / KK</option>
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
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Nama Data</th>
                                                <th>Jumlah Terdata</th>
                                                <th>Sasaran</th>
                                                <th>Keterangan</th>
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