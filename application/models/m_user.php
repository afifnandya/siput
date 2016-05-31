<?php
class m_user extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    function validate($username,$password){
        $this->db->where('Id_admin',$username);
        $this->db->where('Pass_admin',$password);
        $query = $this->db->get('akun_admin');
        return $query->result_array();
    }
    
    function get_data_sekolah($id_sekolah){
        $this->db->where('id_sekolah',$id_sekolah);
        $query = $this->db->get('sekolah');
        return $query->result_array();
    }

}
?>