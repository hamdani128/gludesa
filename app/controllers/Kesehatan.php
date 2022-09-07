<?php
class Kesehatan extends Controller {
    

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
            'modul' => 'Kesehatan / Pendataan (Covid19)',
            'page' => 'Pendataan',
            'title' => 'GluDesa - Pendataan',
        ];
        $this->view('pages/kesehatan/pendataan', $data);
    }

    public function covid19()
    {
        $data = [
            'modul' => 'Kesehatan / Pendataan (Covid19)',
            'page' => 'Pendataan',
            'title' => 'GluDesa - Pendataan',
        ];
        $this->view('pages/kesehatan/pendataan', $data);
    }

    public function pemantauan()
    {
        $data = [
            'modul' => 'Kesehatan / Pemantanuan',
            'page' => 'Pemantauan',
            'title' => 'GluDesa - Pemantauan',
        ];
        $this->view('pages/kesehatan/pemantauan', $data);
    }

    public function vaksin()
    {
        $data = [
            'modul' => 'Kesehatan / Vaksin',
            'page' => 'vaksin',
            'title' => 'GluDesa - Vaksin',
        ];
        $this->view('pages/kesehatan/vaksin', $data);
    }


}