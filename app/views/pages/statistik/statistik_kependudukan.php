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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Statistik / Kependudukan</a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="accordion accordion-primary-solid" id="accordion-two">
                            <div class="accordion-item">
                                <div class="accordion-header  rounded-lg" id="accord-2One" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="true"
                                    role="button">
                                    <span class="accordion-header-text">Statistik Kependudukan</span>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse2One" class="collapse accordion__body show"
                                    aria-labelledby="accord-2One" data-bs-parent="#accordion-two">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-2Two"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2Two"
                                    aria-controls="collapse2Two" aria-expanded="true" role="button">
                                    <span class="accordion-header-text">Statistik Keluarga</span>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse2Two" class="collapse accordion__body" aria-labelledby="accord-2Two"
                                    data-bs-parent="#accordion-two">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-2Three"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2Three"
                                    aria-controls="collapse2Three" aria-expanded="true" role="button">
                                    <span class="accordion-header-text">Statistik RTM</span>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse2Three" class="collapse accordion__body"
                                    aria-labelledby="accord-2Three" data-bs-parent="#accordion-two">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header collapsed rounded-lg" id="accord-3Three"
                                    data-bs-toggle="collapse" data-bs-target="#collapse3Three"
                                    aria-controls="collapse2Three" aria-expanded="true" role="button">
                                    <span class="accordion-header-text">Statistik Program Bantuan</span>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div id="collapse3Three" class="collapse accordion__body"
                                    aria-labelledby="accord-2Three" data-bs-parent="#accordion-two">
                                    <div class="accordion-body-text">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#mymodal"
                                            class="btn btn-success btn-xxs" data-bs-toggle="dropdown"><i
                                                class="fa fa-plus"></i>
                                            Tambah Rumah Tangga
                                        </button>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger btn-xxs">
                                            <i class="fa fa-trash"></i>
                                            Hapus Data Terpilih
                                        </button>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-dark btn-xxs">
                                            <i class="fa fa-upload"></i>
                                            Import
                                        </button>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning btn-xxs">
                                            <i class="fa fa-download"></i>
                                            Laporan
                                        </button>
                                        <button type="button"
                                            class="btn btn-warning btn-xxs dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-print"></i>
                                                Cetak
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-file"></i>
                                                unduh
                                            </a>
                                        </div>
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
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="" id="">
                                        <option value="">Status Penduduk</option>
                                        <option value="tetap">Tetap</option>
                                        <option value="tidak tetap">Tidak Tetap</option>
                                    </select>
                                    <select class="form-control" name="" id="">
                                        <option value="">Status Dasar</option>
                                        <option value="Hidup">Hidup</option>
                                        <option value="Mati">Mati</option>
                                        <option value="Hilang">Hilang</option>
                                        <option value="Pergi">Pergi</option>
                                        <option value="Pindah">Pindah</option>
                                        <option value="Tidak Valid">Tidak Valid</option>
                                    </select>
                                    <select class="form-control" name="" id="">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <select class="form-control">
                                        <option value="">Pilih Dusun</option>
                                        <option value="loco">Loco</option>
                                        <option value="Kerendangan">Kerendangan</option>
                                        <option value="Senggigi">Senggigi</option>
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
                                                <th>
                                                    <input type="checkbox" name="" id="">
                                                </th>
                                                <th>No</th>
                                                <th>Aksi</th>
                                                <th>Foto</th>
                                                <th>No.Rumah Tangga</th>
                                                <th>Kepala Rumah Tangga</th>
                                                <th>NIK</th>
                                                <th>Jumlah Anggota</th>
                                                <th>Alamat</th>
                                                <th>Dusun</th>
                                                <th>RW</th>
                                                <th>RT</th>
                                                <th>TGL Terdaftar</th>
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