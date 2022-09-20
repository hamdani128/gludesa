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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Sekretariat / Klasifikasi Surat</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-xxs btn-success">
                                    <i class="fa fa-plus"></i>
                                    Tambah Klasifikasi Surat
                                </button>
                                <button class="btn btn-xxs btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Hapus Data Terpilih
                                </button>
                                <button class="btn btn-xxs btn-dark">
                                    <i class="fa fa-upload"></i>
                                    Import
                                </button>
                                <button class="btn btn-xxs btn-info">
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
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
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