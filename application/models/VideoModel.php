<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VideoModel extends CI_Model {

  function addVideo($data){
    $c = $this->db->count_all_results('video');
    $data['sequence'] = $c;
    $this->db->insert('video',$data);
    return $this->db->insert_id();
  }

  function editVideo($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('video',$data);
  }

  function getVideoList(){
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('video')->result_array();

    foreach ($res as $key => $value) {
      $res[$key]['path'] = getVideoFile($value['id']).$value['path'];
    }
    return $res;
  }
  

}

/* End of file VideoModel.php */
?>