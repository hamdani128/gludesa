<?php
class Kehadiran extends Controller {
    

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
            'modul' => 'Kehadiran - Jam Kerja Kehadiran',
            'page' => 'jam_kehadiran',
            'title' => 'GluDesa - Kehadiran',
        ];
        $this->view('pages/kehadiran/jam_kerja', $data);
    }

    public function kehadiran(){
        $data = [
            'modul' => 'Kehadiran - Jam Kerja Kehadiran',
            'page' => 'jam_kehadiran',
            'title' => 'GluDesa - Kehadiran',
        ];
        $this->view('pages/kehadiran/jam_kerja', $data);
    }

    public function kehadiran_hari_libur(){
        $data = [
            'modul' => 'Kehadiran - Hari Libur Kehadiran',
            'page' => 'kehadiran_hari_libur',
            'title' => 'GluDesa - Kehadiran Hari Libur',
        ];
        $this->view('pages/kehadiran/jam_libur', $data);
    }

    public function rekapitulasi_kehadiran(){
        $data = [
            'modul' => 'Kehadiran - Rekapitualasi Kehadiran',
            'page' => 'rekapitulasi_kehadiran',
            'title' => 'GluDesa - Kehadiran Rekapitulasi',
        ];
        $this->view('pages/kehadiran/rekapitulasi_kehadiran', $data);
    }

    public function pengaduan(){
        $data = [
            'modul' => 'Kehadiran - Pengaduan',
            'page' => 'pengaduan',
            'title' => 'GluDesa - Pengaduan',
        ];
        $this->view('pages/kehadiran/pengaduan', $data);
    }

    


}