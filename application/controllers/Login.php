<?php


class Login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('loginModel');
    }

    function index(){
        $this->load->view('loginView');
    }

    function auth(){
        // Masukan Variable
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cekUser=$this->loginModel->authUser($username,$password);

        if($cekUser >> 0){
            $level=$this->loginModel->cekLevel($username);
            $data['level']=$level;
            switch ($level){

                case 1:
                    //SuperAdmin
                    //redirect();
                    $this->load->view('tmp/1',$data);
                    break;
                    //
                case 2:
                    //Admin
                    //redirect();
                    $this->load->view('tmp/2');
                    break;
                case 3:
                    //Admin Gudang
                    //redirect();
                    break;
                case 4:
                    //Admin Sales
                    //redirect();
                    break;
                case 5:
                    //admin Sales
                    //redirect();
                    break;
            }

        }else{
            $this->load->view('tmp/gagal');

        }
        /**
         *
         */
        function logout(){
            $this->session->session_destroy();
            $url=base_url('');
            redirect($url);
        }


    }

}