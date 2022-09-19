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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layanan Surat / Dokumen Persyaratan Surat </a>
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
                                    <i class="icon-plus"></i>
                                    Tambah
                                </button>
                                <button class="btn btn-xxs btn-danger">
                                    <i class="icon-trash"></i>
                                    Hapus
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
                                                <th>
                                                    <input type="checkbox" name="" id="" class="form-checkbox">
                                                </th>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Nama Dokumen</th>
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