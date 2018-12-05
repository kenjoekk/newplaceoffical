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

    $this->db->where('venue_id',$id);
    $venue_img = $this->db->get('venue_img')->result_array();
    foreach ($venue_img as $key => $value) {
      $this->removeVenueImg($value['id']);
    }

    if(isDirEmpty(getVenuePath($venue['id']))){
      rmdir(getVenuePath($venue['id']));
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

  function get_once_venue_with_img($id){
    $this->db->where('id',$id);
    $this->db->select('id,english_name,chiness_name');
    $venue = $this->db->get('venue')->row_array();

    $this->db->where('venue_id',$venue['id']);
    $this->db->order_by('sequence','ASC');
    $venue_img = $this->db->get('venue_img')->result_array();
    // getVenueFile
    foreach ($venue_img as $key => $value) {
      $path = explode(',',$value['path']);
      $new_path = '';
      foreach ($path as $key2 => $value2) {
        $new_path .= getVenueFile($venue['id']).$value2.',';
      }
      $venue_img[$key]['path'] = rtrim($new_path, ",");;
    }
    $venue['venue_img'] = $venue_img;
    return $venue;
  }

  function addVenueImg($data){
    $this->db->where('venue_id',$data['venue_id']);
    $c = $this->db->count_all_results('venue_img');
    $data['sequence'] = $c;
    $this->db->insert('venue_img',$data);
    return $this->db->insert_id();
  }

  function editVenueImg($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('venue_img',$data);
  }

  function removeVenueImg($imgid){
    $this->db->where('id',$imgid);
    $venue_img = $this->db->get('venue_img')->row_array();
    
    $this->db->where('id',$imgid);
    $this->db->delete('venue_img');

    $path = explode(',',$venue_img['path']);
    foreach ($path as $key => $value) {
      $filename = explode('?',$value);
      if(is_file(getVenuePath($venue_img['venue_id']).$filename[0])){
        unlink(getVenuePath($venue_img['venue_id']).$filename[0]);
      }  
    }
    

    $this->setImgSequence($venue_img['venue_id']);
    return true;
  }

  function moveVenueImg($id,$type){
    $this->db->where('id',$id);
    $this->db->select('venue_id,sequence');
    $venue_img = $this->db->get('venue_img')->row_array();
    $data = [];
    if($type=="up"){
      $data['sequence'] = $venue_img['sequence']-1.5;
    }else{
      $data['sequence'] = $venue_img['sequence']+1.5;
    }
    $this->db->where('id',$id);
    $this->db->update('venue_img',$data);

    $this->setImgSequence($venue_img['venue_id']);
    return true;
  }

  function setImgSequence($v_id){
    $this->db->where('venue_id',$v_id);
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('venue_img')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('id',$value['id']);
      $this->db->update('venue_img',array('sequence'=>$key));
    }
    
  }

}


/* End of file VenueModel.php */

?>