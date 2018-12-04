<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VenueModel extends CI_Model {

  function addVenue($data){
    $c = $this->db->count_all_results('venue');
    $data['sequence'] = $c;
    $this->db->insert('venue',$data);
    return $this->db->insert_id();
  }

  function editVenue($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('venue',$data);
  }

  function get_venue_list(){
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('venue')->result_array();

    foreach ($res as $key => $value) {
      $res[$key]['img_url'] = getVenueFile($value['id']).$value['img_url'];
    }
    return $res;
  }

  function get_once_venue($id){
    $this->db->where('id',$id);
    $res = $this->db->get('venue')->row_array();
    $res['img_url'] = getVenueFile($res['id']).$res['img_url'];
    return $res;
  }

  function removeVenue($id){
    $this->db->where('id',$id);
    $venue = $this->db->get('venue')->row_array();
    
    $this->db->where('id',$id);
    $this->db->delete('venue');

    $filename = explode('?',$venue['img_url']);
    if(is_file(getVenuePath($venue['id']).$filename[0])){
      unlink(getVenuePath($venue['id']).$filename[0]);
    }

    $this->setSequence();
    return true;
  }

  function moveVenue($id,$type){
    $this->db->where('id',$id);
    $this->db->select('sequence');
    $venue = $this->db->get('venue')->row_array();
    $data = [];
    if($type=="up"){
      $data['sequence'] = $venue['sequence']-1.5;
    }else{
      $data['sequence'] = $venue['sequence']+1.5;
    }
    $this->db->where('id',$id);
    $this->db->update('venue',$data);

    $this->setSequence();
    return true;
  }

  function setSequence(){
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('venue')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('id',$value['id']);
      $this->db->update('venue',array('sequence'=>$key));
    }
    
  }

}


/* End of file VenueModel.php */

?>