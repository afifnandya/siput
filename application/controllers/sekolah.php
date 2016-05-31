<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sekolah extends CI_Controller {
	public function index()
	{
        $this->load->model('m_sekolah');
        
        $data_sekolah = $this->m_sekolah->get_data_sekolah('5743b469');
//        echo "<pre>";
//        print_r($data_sekolah);
//        echo "</pre>";
        $data['nama'] = $data_sekolah[0]['Nama_sekolah'];
        $data['alamat'] = $data_sekolah[0]['Alamat_sekolah'];
        $data['telp'] = $data_sekolah[0]['Telp_sekolah'];
        $data['web'] = $data_sekolah[0]['Web_sekolah'];
        $data['email'] = $data_sekolah[0]['Email_sekolah'];
        $data['visi'] = $data_sekolah[0]['Visi'];
        $data['misi'] = explode(",",$data_sekolah[0]['Misi']);
        $data['logo'] = base_url()."assets/img/logo-smp/".$data_sekolah[0]['Logo'];
        $data['banner'] = base_url()."assets/img/cover-smp/".$data_sekolah[0]['Gambar'];
        $data['skor'] = $data_sekolah[0]['Skor_Total'];
        $data['deskripsi_skor'] = $data_sekolah[0]['Deskripsi_Skor'];
        
        $data['kepala_sekolah'] = explode("&",$data_sekolah[0]['Kepala_Sekolah']);
        $data['nama_kepala_sekolah'] = $data['kepala_sekolah'][0];
        $data['foto_kepala_sekolah'] = base_url()."assets/img/struktur-smp/50px/".$data['kepala_sekolah'][1];
        
        $data['wk1_kepala_sekolah'] = explode("&",$data_sekolah[0]['Wakil_1']);
        $data['wk1_nama_kepala_sekolah'] =  $data['wk1_kepala_sekolah'][0];
        $data['wk1_foto_kepala_sekolah'] =  base_url()."assets/img/struktur-smp/50px/".$data['wk1_kepala_sekolah'][1];
        
        
        $data['wk2_kepala_sekolah'] = explode("&",$data_sekolah[0]['Wakil_2']);
        $data['wk2_nama_kepala_sekolah'] =  $data['wk2_kepala_sekolah'][0];
        $data['wk2_foto_kepala_sekolah'] =  base_url()."assets/img/struktur-smp/50px/".$data['wk2_kepala_sekolah'][1];
        
//        print_r($data);
		$this->load->view('sekolah',$data);
	}
    public function get_sekolah($id){
        $this->load->model('m_sekolah');
        
        $data_sekolah = $this->m_sekolah->get_data_sekolah($id);
        if(count($data_sekolah) != 0){
        $data['nama'] = $data_sekolah[0]['Nama_sekolah'];
        $data['alamat'] = $data_sekolah[0]['Alamat_sekolah'];
        $data['telp'] = $data_sekolah[0]['Telp_sekolah'];
        $data['web'] = $data_sekolah[0]['Web_sekolah'];
        $data['email'] = $data_sekolah[0]['Email_sekolah'];
        $data['visi'] = $data_sekolah[0]['Visi'];
        $data['misi'] = explode(",",$data_sekolah[0]['Misi']);
        $data['logo'] = base_url()."assets/img/logo-smp/".$data_sekolah[0]['Logo'];
        $data['banner'] = base_url()."assets/img/cover-smp/".$data_sekolah[0]['Gambar'];
        $data['skor'] = $data_sekolah[0]['Skor_Total'];
        $data['deskripsi_skor'] = $data_sekolah[0]['Deskripsi_Skor'];
        
        $data['kepala_sekolah'] = explode("&",$data_sekolah[0]['Kepala_Sekolah']);
        $data['nama_kepala_sekolah'] = $data['kepala_sekolah'][0];
        $data['foto_kepala_sekolah'] = base_url()."assets/img/struktur-smp/50px/".$data['kepala_sekolah'][1];
        
        $data['wk1_kepala_sekolah'] = explode("&",$data_sekolah[0]['Wakil_1']);
        $data['wk1_nama_kepala_sekolah'] =  $data['wk1_kepala_sekolah'][0];
        $data['wk1_foto_kepala_sekolah'] =  base_url()."assets/img/struktur-smp/50px/".$data['wk1_kepala_sekolah'][1];
        
        
        $data['wk2_kepala_sekolah'] = explode("&",$data_sekolah[0]['Wakil_2']);
        $data['wk2_nama_kepala_sekolah'] =  $data['wk2_kepala_sekolah'][0];
        $data['wk2_foto_kepala_sekolah'] =  base_url()."assets/img/struktur-smp/50px/".$data['wk2_kepala_sekolah'][1];
        
//        print_r($data);
		$this->load->view('sekolah',$data);            
        }
        else{
            echo "data tidak ditemukan";
        }
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */