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
                <li class="breadcrumb-item"><a href="javascript:void(0)"> Sekretariat / Informasi Publik </a>
                </li>
            </ol>
        </div>
        <!-- content -->
        <div class="row">
            <!-- card menu -->
            <div class="col-lg-4">
                <div class="card" style="height: 30%;">
                    <div class="card-header bg-primary" style="height:25%;">
                        <h4 class="text-white">Iventaris</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item active">
                                        <a href="#" class="text-white">
                                            <i class="fa fa-list"></i>
                                            Daftar Iventaris
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-arrow-right"></i>
                                            Daftar Mutasi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="height: 65%;">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">
                            Kategori Iventaris
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Laporan Semua Aset
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Tanah
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Peralatan dan Mesin
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Gedung dan Bangunan
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Jalan, Irigasi, dan Jaringan
                                        </a>
                                    </li>
                                    <li class="list-group-item active">
                                        <a href="#" class="text-white">
                                            <i class="fa fa-tags"></i>
                                            Asset Tetap Lainnnya
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">
                                            <i class="fa fa-tags"></i>
                                            Kontruksi Dalam pengerjaan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Menu -->

            <!-- card-content -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                            <tr class="text-center text-white">
                                                <td class="text-judul bold" rowspan="3"
                                                    style="vertical-align:middle;text-align:center;background-color: rgb(48, 45, 58);font-size: 8pt;">
                                                    No
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;background-color: rgb(48, 45, 58);font-size: 8pt;"
                                                    class="text-judul bold" rowspan="3">
                                                    Jenis Barang
                                                </td>
                                                <td style="vertical-align : middle;text-align:center;width: 100px;background-color: rgb(48, 45, 58);font-size: 8pt;"
                                                    class="text-judul bold" rowspan="3">
                                                    Keterangan
                                                </td>
                                                <td class="text-judul bold" colspan="6"
                                                    style="background-color: rgb(114, 116, 60);font-size: 7pt;">
                                                    Asal Barang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-white" colspan="2"
                                                    style="vertical-align : middle;text-align:center;width: 100px;">
                                                    Dibeli Sendiri
                                                </td>
                                                <td class="text-judul" colspan="3">
                                                    Bantuan
                                                </td>
                                                <td class="text-judul">
                                                    Month 1</td>
                                                <td class="text-judul">
                                                    Month 2</td>
                                                <td class="text-judul">
                                                    Month 3</td>
                                                <td class="text-judul">
                                                    Month 3</td>
                                                <td class="text-judul bold" colspan="2"
                                                    style="vertical-align : middle;text-align:center;width: 100px;">
                                                    Bantuan
                                                </td>
                                            </tr>
                                        </thead>
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