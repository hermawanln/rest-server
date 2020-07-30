<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function getMahasiswa($id = NULL)
    {
        if ($id === NULL) {
            return $this->db->get('mahasiswa')->result_array();
        } else {
            // $db = $this->db->get('mahasiswa')
            //                 ->where('id', $id);
                            
            // return $db->result_array();
            
            return $this->db->get_where('mahasiswa', ['id' => $id])->result_array();
        
        }
    
    }

    public function deleteMahasiswa($id)
    {
        $this->db->delete('mahasiswa', ['id' => $id]);

        return $this->db->affected_rows();
        
        
    }

}

/* End of file Mahasiswa_model.php */
?>