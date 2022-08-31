<?php
class InfoDesa extends Controller {
    

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

    public function identitas()
    {
        $data = [
            'modul' => 'Info Desa',
            'page' => 'Identitas',
            'title' => 'GluDesa - Identitas',
        ];
        $this->view('pages/info/identitas', $data);
    }

    public function wilayah_administratif()
    {
        $data = [
            'modul' => 'Info Desa',
            'page' => 'wilayah',
            'title' => 'GluDesa - Wilayah Administratif',
        ];
        $this->view('pages/info/wilayah', $data);
    }

    public function lembaga_desa()
    {
        $data = [
            'modul' => 'Info Desa',
            'page' => 'Lembaga',
            'title' => 'GluDesa - Lembaga Desa',
        ];
        $this->view('pages/info/lembaga', $data);
    }

    public function status_desa()
    {
        $data = [
            'modul' => 'Info Desa',
            'page' => 'Status Desa',
            'title' => 'Gludesa - Status Desa',
        ];
        $this->view('pages/info/status_desa', $data);
    }


}