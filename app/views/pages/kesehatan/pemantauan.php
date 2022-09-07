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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kesahatan / Pemantauan</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Pemantuan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-labe ">NIK/Nama</label>
                                    <input type="text" name="" id="" class="form-control"
                                        placeholder=" -- Silahkan Masukkan NIK / Nama --">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal / Jam</label>
                                    <input type="datetime-local" name="" value="" class="form-control">
                                </div>
                                <div class="form-group row pt-2">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Tanggal Tiba</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Data H+</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Suhu Tubuh</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="" class="form-label">Centang Jika mengalami kondisi berikut</label>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="" id="">
                                                    <small style="margin-left: 10px;">Batuk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="" id="">
                                                    <small style="margin-left: 10px;">Flu</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="" id="">
                                                    <small style="margin-left: 10px;">Sesak Nafas </small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group pt-2">
                                    <label for="" class="form-label">Keluhan Lain</label>
                                    <textarea class="form-control" name="" id="" cols="20" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-right">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-xs">
                                    <i class="fa fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
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