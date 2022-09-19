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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Kehadiran / Rekapitulasi Kehadiran </a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="form-label">ReStatusntang Tanggal</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Perangkat Desa</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="" class="form-label">Status Kehadiran</label>
                                    <div class="input-group">
                                        <select class="form-control" name="status_kehadiran" id="status_ke">
                                            <option value="">Semua Status</option>
                                        </select>
                                        <button class="btn btn-success btn-sm">
                                            <i class="icon-document"></i>
                                            Ekspor ke Excel
                                        </button>
                                    </div>
                                </div>
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
                                                <th>No</th>
                                                <th>NAMA</th>
                                                <th>JABATAN</th>
                                                <th>TANGGAL</th>
                                                <th>JAM MASUK</th>
                                                <th>JAM KELUAR</th>
                                                <th>TOTAL WAKTU</th>
                                                <th>STATUS</th>
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