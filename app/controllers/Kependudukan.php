<?php
class Kependudukan extends Controller {
    

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
            'modul' => 'Info Desa',
            'page' => 'Identitas',
            'title' => 'GluDesa - Indentitas',
        ];
        $this->view('pages/info/indentitas', $data);
    }

    public function penduduk()
    {
        $data = [
            'modul' => 'Kependudukan',
            'page' => 'penduduk',
            'title' => 'GluDesa - Penduduk',
        ];
        $this->view('pages/kependudukan/penduduk', $data);
    }

    public function keluarga()
    {
        $data = [
            'modul' => 'Kependudukan',
            'page' => 'keluarga',
            'title' => 'GluDesa - Keluarga',
        ];
        $this->view('pages/kependudukan/keluarga', $data);
    }

    public function add_penduduk_lahir()
    {
        $data = [
            'modul' => 'Kependudukan',
            'page' => 'add_penduduk_lahir',
            'title' => 'GluDesa - Tambah Penduduk Lahir',
        ];
        $this->view('pages/kependudukan/add_penduduk_lahir', $data);
    }


}