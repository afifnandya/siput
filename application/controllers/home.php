<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if($this->session->userdata('isLogin')){
            $this->load->model('m_sekolah');
            $query = $this->m_sekolah->get_map_sekolah();
            for($i=0;$i<count($query);$i++){
                if(intval($query[$i]['Skor_total']) < "20"){
                    $query[$i]['marker_color'] = '#e74c3c';
                }
                elseif(intval($query[$i]['Skor_total']) > "21" and intval($query[$i]['Skor_total']) <= "40"){
                    $query[$i]['marker_color'] = '#e7832b';
                }
                elseif(intval($query[$i]['Skor_total']) > "41" and intval($query[$i]['Skor_total']) <= "60"){
                    $query[$i]['marker_color'] = '#f1c40f';
                }
                elseif(intval($query[$i]['Skor_total']) > "61" and intval($query[$i]['Skor_total']) <= "80"){
                    $query[$i]['marker_color'] = '#3498db';
                }
                elseif(intval($query[$i]['Skor_total']) > "81" and intval($query[$i]['Skor_total']) <= "100"){
                    $query[$i]['marker_color'] = '#2abb67';
                }
                else{
                    $query[$i]['marker_color'] = 'a';
                }
                
            }
            $data['map_sekolah'] = $query;
//            echo "<pre>";
//            print_r($query);
//            echo "</pre>";
            $this->load->view('home',$data);   
        }
        else{
           redirect('login');
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */