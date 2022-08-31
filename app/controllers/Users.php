<?php
class Users extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // process form
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '' 
            ];

            //valide name
            if(empty($data['name'])){
                $data['name_err'] = 'Please enter name';
            }

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }else{
                //check for email
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email already exist';
                }
            }

            //validate password 
            if(empty($data['password'])){
                $data['password_err'] = 'Please enter your password';
            }elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be atleast six characters';
            }

            //validate confirm password
            if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Please confirm password';
            }else{
                if($data['password'] != $data['confirm_password'])
                {
                    $data['confirm_password_err'] = 'Password does not match';
                }
            }

            //make sure error are empty
            if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['password_confirm_err'])){
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    flash('register_success', 'you are registerd you can login now');
                    redirect('users/login');
                }
            }else{
                $this->view('users/register', $data);
            }
        }else{
            //init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '' 
            ];
            //load view
            $this->view('users/register', $data);          
        }
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter email';
            }else{
                if($this->userModel->findUserByEmail($data['email'])){
                    //user found
                }else{
                    $data['email_err'] = 'User not found';
                }
            }

            //validate password 
            if(empty($data['password'])){
                $data['password_err'] = 'Please enter your password';
            }elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be atleast six characters';
            }
            
            //make sure error are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser){
                    //create session
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['password_err'] = 'Password incorrect';
                    $this->view('users/login', $data);
                }
            }else{
                $this->view('users/login', $data);
            }

        }else{
            //init data f f
            $data = [
                'title' => 'Login Administrator',
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
            //load view
            $this->view('users/login', $data);          
        }
    }

    public function check_login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = [
            'username' => $username,
            'password_new' => md5($password),
            // 'email_err' => '',
            // 'password_err' => ''
        ];
        // echo $data['passwor_new'];
         //validate email
        if(empty($data['username'])){
            $data['username_err'] = 'Please enter Username';
        }else{
            if($this->userModel->findUsersUsename($data['username'])){
                $data['username_err'] = 'Username already exist';
            }else{
                $data['username_err'] = 'User not found';
                $response = [
                    'status' => 'Users Not Found',
                ];
                echo json_encode($response);
            }
        }

        if(empty($data['username'])){
            $data['username_err'] = 'Please enter Username';
        }else{
            if($this->userModel->findUsersUsename($data['username'])){
                $data['username_err'] = 'Username already exist';
            }else{
                $data['username_err'] = 'User not found';
                $response = [
                    'status' => 'Users Not Found',
                ];
                echo json_encode($response);
            }
        }
        
        //  //make sure error are empty
        if($data['username_err'] == 'Username already exist'){
            $loggedInUser = $this->userModel->login($data['username']);
            if($loggedInUser->password == $data['password_new']){
                 //create session
                $this->createUserSession($loggedInUser);
                // redirect('pages/index');
            }else{
                $data['password_err'] = 'Password incorrect';
                $this->view('users/login', $data);
            }
        }else{
            // $this->view('users/login', $data);
        }
    }
    //setting user section variable
    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['fullname'] = $user->fullname;
        $_SESSION['email'] = $user->email;
        $_SESSION['inititated'] = $user->inititated;
        $_SESSION['message'] = 'welcome';
        $response = [
            'status' => 'success',
            'message' => 'You are logged in'
        ];
        echo json_encode($response);
    }

    function check_username(){
        $username = $_POST['username_check'];
        $db = new Database;
        $SQL = "SELECT * FROM cdpm_users WHERE username = '" . $username . "'";
        $query = $db->query($SQL);
        $row = $db->single();
        if($row != null){
            $response = [
                'status' => 'success',
                'message' => 'Username Sudah Terdaftar'
            ];
        }else{
            $response = [
                'status' => 'error',
                'message' => 'Username Belom Terdaftar'
            ];
        }
        echo json_encode($response);
    }

    public function update_password()
    {
        date_default_timezone_set('Asia/Jakarta');
        $username = $_POST['username'];
        $password = $_POST['new_password'];

        $md5_password = md5($password);
        $db = new Database;
        $SQL = "SELECT * FROM cdpm_users WHERE username = '" . $username . "'";
        $query = $db->query($SQL);
        $row = $db->single();
        $id = $row->id;        
        $SQL1 = "UPDATE cdpm_users SET password = '" . $md5_password . "' WHERE username = '" . $username . "'";
        $SQL2 = "INSERT INTO cdpm_update_password (pasword_baru, hash, user_id, created_at)
                VALUES ('" . $password . "', '" . $md5_password . "', '" . $id . "' , '" . date('Y-m-d H:i:s') . "')";
        $query1 = $db->query($SQL1);
        $db->execute();
        $query2 = $db->query($SQL2);
        $db->execute();
        if ($db->execute()) {
            $response = [
                'status' => 'success',
                'message' => 'Password Berhasil Diubah'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Password Gagal Diubah'
            ];
        }
        echo json_encode($response);
    }


    //logout and destroy user session
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        session_destroy();
        redirect('users/login');
    }


}