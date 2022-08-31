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


}