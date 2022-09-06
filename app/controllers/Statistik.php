<?php
class Statistik extends Controller {
    
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
            'modul' => 'Statistik / Kependudukan',
            'page' => 'statistik_kependudukan',
            'title' => 'GluDesa - Statistik Kependudukan',
        ];
        $this->view('pages/statistik/statistik_kependudukan', $data);
    }

    public function statistik_kependudukan(){
        $data = [
            'modul' => 'Statistik / Kependudukan',
            'page' => 'statistik_kependudukan',
            'title' => 'GluDesa - Statistik Kependudukan',
        ];
        $this->view('pages/statistik/statistik_kependudukan', $data);
    }

    public function laporan_bulanan()
    {
        $data = [
            'modul' => 'Statistik / Laporan Bulanan',
            'page' => 'statistik_laporan_bulanan',
            'title' => 'GluDesa - Statistik Laporan Bulanan',
        ];
        $this->view('pages/statistik/laporan_bulanan', $data);
    }

    public function laporan_rentan()
    {
        $data = [
            'modul' => 'Statistik / Laporan Rentan',
            'page' => 'statistik_laporan_rentan',
            'title' => 'GluDesa - Statistik Laporan Rentan',
        ];
        $this->view('pages/statistik/laporan_rentan', $data);
    }

    public function laporan_penduduk()
    {
        $data = [
            'modul' => 'Statistik / Laporan Penduduk',
            'page' => 'statistik_laporan_penduduk',
            'title' => 'GluDesa - Statistik Laporan Penduduk',
        ];
        $this->view('pages/statistik/laporan_penduduk', $data);
    }

    


}