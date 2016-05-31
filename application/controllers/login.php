<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
    public function index(){
        if($this->session->userdata('isLogin')){
            redirect('home');
        }
            $this->load->view("login");
        }
        function validate(){
            $this->load->model('m_user');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $query = $this->m_user->validate($username,$password);
                if($query != NULL){
                    foreach ($query as $row){
                        $data_session = array(
                                'Id_admin'	     => $row['Id_admin'],
                                'Nama_admin'  	 => $row['Nama_admin'],
                                'Pass_admin'	 => $row['Pass_admin'],
                        );
                    }
                    $this->session->set_userdata('isLogin', $data_session);                   
                    redirect('home');
                }else{
                    redirect('login');
				}
        }
        function logout(){
            $this->session->unset_userdata('isLogin');
            redirect('login');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */