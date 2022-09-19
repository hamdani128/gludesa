<?php
class layanansurat extends Controller {
    

    public function __construct(){
        $timeout = 10;
		$logout_redirect_url = URLROOT . '/users/logout';
		$timeout = $timeout * 60;
		if (isset($_SESSION['start_time'])) {
			$elapsed_time = time() - $_SESSION['start_time'];
			if ($elapsed_time >= $timeout) {
				// session_destroy();
				echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
			}
		}
		$_SESSION['start_time'] = time();
        if(!isLoggedIn()){
            redirect('users/logout');
        }
        //new model instance
        
    }
    public function index(){
        $data = [
            'modul' => 'Layanan Surat / Pengaturan Surat',
            'page' => 'pengaturan_surat',
            'title' => 'GluDesa - Layanan Surat',
        ];
        $this->view('pages/surat/pengaturan_surat', $data);
    }

    public function pengaturan_surat(){
        $data = [
            'modul' => 'Layanan Surat / Pengaturan Surat',
            'page' => 'pengaturan_surat',
            'title' => 'GluDesa - Layanan Surat',
        ];
        $this->view('pages/surat/pengaturan_surat', $data);
    }

    public function cetak_surat()
    {
        $data = [
            'modul' => 'Layanan Surat / Cetak Surat',
            'page' => 'cetak_surat',
            'title' => 'GluDesa - Cetak Surat',
        ];
        $this->view('pages/surat/cetak_surat', $data);
    }

    public function permohonan_surat_admin()
    {
        $data = [
            'modul' => 'Layanan Surat / Permohonan Surat',
            'page' => 'permohonan_surat_admin',
            'title' => 'GluDesa - Permohonan Surat',
        ];
        $this->view('pages/surat/permohonan_surat', $data);
    }

    public function arsip_keluar_masuk()
    {
        $data = [
            'modul' => 'Layanan Surat / Arsip Layanan Surat',
            'page' => 'arsip_keluar_masuk',
            'title' => 'GluDesa - Arsip Layanan Surat',
        ];
        $this->view('pages/surat/arsip_layanan', $data);
    }

    public function daftar_persyaratan()
    {
        $data = [
            'modul' => 'Layanan Surat / Daftar Persyaratan Surat',
            'page' => 'daftar_persyaratan',
            'title' => 'GluDesa - Daftar Persyaratan Surat',
        ];
        $this->view('pages/surat/daftar_persyaratan', $data);
    }
    

}