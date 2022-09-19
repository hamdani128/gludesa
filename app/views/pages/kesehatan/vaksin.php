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
                <div class="card" style="height: 50%;">
                    <di class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <tr>
                                        <td>
                                            <a href="#">Daftar Penerima</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Laporan Penduduk</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">Laporan Rekap</a>
                                        </td>
                                    </tr>
                                </table>
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
                                <button class="btn btn-primary btn-xxs">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                                <button class="btn btn-dark btn-xxs">
                                    <i class="fa fa-upload"></i>
                                    Unduh
                                </button>
                                <button class="btn btn-info btn-xxs">
                                    <i class="fa fa-sync-alt"></i>
                                    Bersihkan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <select class="form-control" id="status_vaksin" name="status_vaksin">
                                        <option value="">-- Status Vaksin --</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <select class="form-control" id="dusun" name="dusun">
                                        <option value="">-- Pilih Dusun --</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <select class="form-control" id="jenis_vaksin" name="jenis_vaksin">
                                        <option value="">-- Pilih Jenis Vaksin --</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input type="date" name="" id="" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-filter"></i></span>
                                    <input type="text" name="" id="" class="form-control" placeholder="rentang usia">
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>No.KK</th>
                                                <th>Umur</th>
                                                <th>Dusun</th>
                                                <th>Alamat</th>
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