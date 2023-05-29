<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
        if(!$this->session->userdata('username')){ 
            $this->load->view('auth/sign');
        }
        else{
            redirect('list');
        }
	}

    public function loginAction()
	{
		// $this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username wajib diisi!']);
        // $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
        // if ($this->form_validation->run()==FALSE)
        $username = $this->input->get("username");
        $password = $this->input->get("password");
        if(FALSE)
        {
            redirect('login');
        }else{
            
            $auth = $this->model_auth->cek_login2($username, $password);

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan', '
                    <script>alert("Username atau password salah")</script>
                ');
                redirect('login');
            }else{
                $arr = array(
                    "username" => $auth->{"username"},
                    "email" => $auth->{"email"},
                    "password" => $auth->{"password"},
                    "alamat" => $auth->{"alamat"},
                    "no_telp" => $auth->{"no_telp"}
                );
                $this->session->set_userdata($arr);

                redirect('home');
            }
        }
	}

    public function registerAction(){
	    $username = $this->input->get("username");
        $email = $this->input->get("email");
        $password = $this->input->get("password");

        $arr = array(
            "username" => $username,
            "email" => $email,
            "password" => $password
        );
        $auth = $this->model_auth->save($arr);

        $this->session->set_flashdata('pesan', '
            <script>alert("Berhasil register")</script>
        ');
		redirect("login");
	}


    public function logout(){
        $this->session->set_flashdata('pesan', '
            <script>alert("Berhasil logout")</script>
        ');
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("password");
        $this->session->unset_userdata("alamat");
        $this->session->unset_userdata("no_telp");

        redirect("login");
    }


    public function profile(){
        if(!$this->session->userdata('username')){
            $this->session->set_flashdata('pesan', '<script>alert("Harap login terlebih dahulu")</script>');
            redirect('login');
        }
        $this->load->view('main/profile/profile');
    }

    public function reset(){
        $username = $this->input->get("username");
        $email = $this->input->get("email");
        $password = $this->input->get("password");
        $alamat = $this->input->get("alamat");
        $no_telp = $this->input->get("no_telp");

        $param = array(
            "username" => $username,
                "email" => $email,
                "password" => $password,
                "alamat" => $alamat,
                "no_telp" => $no_telp
        );
        $this->model_auth->update($username, $param);

        $this->session->set_userdata($param);

        $this->session->set_flashdata('pesan', '
            <script>alert("Berhasil memperbarui profil")</script>
        ');

        //return "Y";
        redirect("profile");
    }

}
