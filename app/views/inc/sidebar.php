<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="<?= URLROOT ?>/assets/images/profile/pic1.jpg" width="20" alt="" />
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi,<b> <?= $_SESSION['fullname'] ?></b></span>
                        <small class="text-end font-w400">william@gmail.com</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li>
                <a href="<?= URLROOT ?>\home" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-046-home"></i>
                    <span class="nav-text">Info Desa</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/infodesa/identitas">Identitas</a></li>
                    <li><a href="<?= URLROOT ?>/infodesa/wilayah_administratif">Wilayah Administratif</a></li>
                    <li><a href="#">Pemerintahan</a></li>
                    <li><a href="<?= URLROOT ?>/infodesa/status_desa">Status</a></li>
                    <li><a href="<?= URLROOT ?>/infodesa/lembaga_desa">Lembaga</a></li>
                    <li><a href="#">Pelayanan Pelanggan</a></li>
                    <li><a href="#">Pendaftaran Kerjasama</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Kependudukan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/kependudukan/penduduk">Penduduk</a></li>
                    <li><a href="<?= URLROOT ?>/kependudukan/keluarga">Keluarga</a></li>
                    <li><a href="<?= URLROOT ?>/kependudukan/rumah_tangga">Rumah Tangga</a></li>
                    <li><a href="<?= URLROOT ?>/kependudukan/kelompok">Kelompok</a></li>
                    <li><a href="<?= URLROOT ?>/kependudukan/suplemen">Data Suplemen</a></li>
                    <li><a href="<?= URLROOT ?>/kependudukan/calon_pemilih">Calon Pemilih</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Statistik</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/statistik/statistik_kependudukan">Statistik Kependudukan</a></li>
                    <li><a href="<?= URLROOT ?>/statistik/laporan_bulanan">laporan Bulanan</a></li>
                    <li><a href="<?= URLROOT ?>/statistik/laporan_rentan">Laporan Kelompok Rentan</a></li>
                    <li><a href="<?= URLROOT ?>/statistik/laporan_penduduk">Laporan Penduduk</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">kesehatan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/kesehatan/covid19">Pendataan</a></li>
                    <li><a href="<?= URLROOT ?>/kesehatan/pemantauan">Pemantauan</a></li>
                    <li><a href="<?= URLROOT ?>/kesehatan/vaksincovid19">Vaksin</a></li>
                    <li><a href="<?= URLROOT ?>/kesehatan/stunting">Stunting</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-017-clipboard"></i>
                    <span class="nav-text">Kehadiran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/kehadiran/kehadiran">Jam Kerja</a></li>
                    <li><a href="<?= URLROOT ?>/kehadiran/kehadiran_hari_libur">Hari Libur</a></li>
                    <li><a href="<?= URLROOT ?>/kehadiran/rekapitulasi_kehadiran">Rekapitulasi</a></li>
                    <li><a href="<?= URLROOT ?>/kehadiran/pengaduan">Pengaduan</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Layanan Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/layanansurat/pengaturan_surat">Pengaturan Surat</a></li>
                    <li><a href="<?= URLROOT ?>/layanansurat/cetak_surat">Cetak Surat</a></li>
                    <li><a href="<?= URLROOT ?>/layanansurat/permohonan_surat_admin">Permohonan Layanan</a></li>
                    <li><a href="<?= URLROOT ?>/layanansurat/arsip_keluar_masuk">Arsip Layanan</a></li>
                    <li><a href="<?= URLROOT ?>/layanansurat/daftar_persyaratan">Daftar Persyaratan</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-044-menu"></i>
                    <span class="nav-text">Skretariat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= URLROOT ?>/sekretariat/informasi_publik">Informasi Publik</a></li>
                    <li><a href="<?= URLROOT ?>/sekretariat/iventaris_asset"">Inventaris</a></li>
                    <li><a href=" #">Klasisfikasi Surat</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-031-ellipsis"></i>
                    <span class="nav-text">Buku Adm.Desa</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Administrasi Umum</a></li>
                    <li><a href="#">Administrasi Penduduk</a></li>
                    <li><a href="#">Administrasi Pembangunan</a></li>
                    <li><a href="#">Arsip Desa</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>