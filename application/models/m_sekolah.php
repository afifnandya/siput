<?php
class m_sekolah extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_data_sekolah(){
        $query = $this->db->get('sekolah');
        return $query->result_array();
    }
    
    function get_data_sekolah($id_sekolah){
        $this->db->where('id_sekolah',$id_sekolah);
        $query = $this->db->get('sekolah');
        return $query->result_array();
    }
    function get_map_sekolah(){
        $this->db->select('Id_sekolah,Nama_sekolah,Skor_total,Logo,latitude,longitude');
        $this->db->limit(2);
        $query = $this->db->get('sekolah');
        return $query->result_array();
    }
    
}
?>