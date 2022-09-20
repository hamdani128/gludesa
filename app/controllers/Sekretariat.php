<?php
class Sekretariat extends Controller {
    

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
            'modul' => 'Sekretariat - Informasi Publik',
            'page' => 'jam_kehadiran',
            'title' => 'GluDesa - Kehadiran',
        ];
        $this->view('pages/kehadiran/jam_kerja', $data);
    }
    public function informasi_publik(){
        $data = [
            'modul' => 'Sekretariat - Informasi Publik',
            'page' => 'jam_kehadiran',
            'title' => 'GluDesa - Kehadiran',
        ];
        $this->view('pages/sekretariat/informasi_publik', $data);
    }

    public function iventaris_asset(){
        $data = [
            'modul' => 'Sekretariat - Iventaris Asset',
            'page' => 'iventaris_asset',
            'title' => 'GluDesa - Inventaris Asset',
        ];
        $this->view('pages/sekretariat/iventaris', $data);
    }

    public function klasifikasi_surat()
    {
        $data = [
            'modul' => 'Sekretariat - Klasifikasi Surat',
            'page' => 'klasifikasi_surat',
            'title' => 'GluDesa - Klasifikasi Surat',
        ];
        $this->view('pages/sekretariat/klasifikasi_surat', $data);
    }

}