<?php
class Landing extends Controller {
    

    // public function __construct(){
    //     $timeout = 15;
	// 	$logout_redirect_url = URLROOT . '/users/logout';
	// 	$timeout = $timeout * 60;
	// 	if (isset($_SESSION['start_time'])) {
	// 		$elapsed_time = time() - $_SESSION['start_time'];
	// 		if ($elapsed_time >= $timeout) {
	// 			// session_destroy();
	// 			echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
	// 		}
	// 	}
	// 	$_SESSION['start_time'] = time();
    //     if(!isLoggedIn()){
    //         redirect('users/logout');
    //     }
    //     //new model instance
        
    // }
    public function index(){
        
        $this->view('landing/index');
    }
}