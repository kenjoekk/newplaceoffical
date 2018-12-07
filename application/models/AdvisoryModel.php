<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdvisoryModel extends CI_Model {

  function get_list(){
    $this->db->order_by('status ASC, create_date DESC');
    $res = $this->db->get('advisory')->result_array();
    return $res;
  }
  
  function doneAdvisory($id){
    $this->db->where('id',$id);
    return $this->db->update('advisory',array('status'=>'1'));
  }

  function updateAdvisory($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('advisory',$data);
  }

  function add_new($data){
    $data['create_date'] = date('Y-m-d H:i:s');
    $data['update_date'] = date('Y-m-d H:i:s');
    $this->db->insert('advisory',$data);
    return true;
  }
}

/* End of file AdvisoryModel.php */
?>