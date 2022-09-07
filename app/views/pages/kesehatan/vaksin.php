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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kesahatan / Vaksin</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <di class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </di>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-info btn-xxs">
                                    <i class="fa fa-print"></i>
                                    Cetak
                                </button>
                                <button class="btn btn-dark btn-xxs">
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
                                                <th>Data H+</th>
                                                <th>Tanggal Tiba</th>
                                                <th>Waktu Pantau</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Usia</th>
                                                <th>JK</th>
                                                <th>Suhu</th>
                                                <th>Batuk</th>
                                                <th>Flu</th>
                                                <th>Sesak</th>
                                                <th>Keluhan</th>
                                                <th>Status</th>
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