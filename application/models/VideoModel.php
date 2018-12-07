<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VideoModel extends CI_Model {

  function addVideo($data){
    $this->db->where('type',$data['type']);
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
    $this->db->where('type','1');
    $this->db->order_by('sequence','ASC');
    $video = $this->db->get('video')->result_array();

    foreach ($video as $key => $value) {
      $video[$key]['path'] = getVideoFile($value['id']).$value['path'];
    }

    $this->db->where('type','2');
    $this->db->order_by('sequence','ASC');
    $img = $this->db->get('video')->result_array();

    foreach ($img as $key => $value) {
      $img[$key]['path'] = getVideoFile($value['id']).$value['path'];
    }
    $res['video'] = $video;
    $res['img'] = $img;
    return $res;
  }

  function removeVideo($id){
    $this->db->where('id',$id);
    $video = $this->db->get('video')->row_array();
    
    $this->db->where('id',$id);
    $this->db->delete('video');

    $filename = explode('?',$video['path']);
    if(is_file(getVideoPath($video['id']).$filename[0])){
      unlink(getVideoPath($video['id']).$filename[0]);
    }

    if(isDirEmpty(getVideoPath($video['id']))){
      rmdir(getVideoPath($video['id']));
    }

    $this->setSequence($video['type']);
    return true;
  }

  function moveVideo($id,$type){
    $this->db->where('id',$id);
    $this->db->select('type,sequence');
    $video = $this->db->get('video')->row_array();
    $data = [];
    if($type=="up"){
      $data['sequence'] = $video['sequence']-1.5;
    }else{
      $data['sequence'] = $video['sequence']+1.5;
    }
    $this->db->where('id',$id);
    $this->db->update('video',$data);

    $this->setSequence($video['type']);
    return true;
  }

  function setSequence($type){
    $this->db->where('type',$type);
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('video')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('id',$value['id']);
      $this->db->update('video',array('sequence'=>$key));
    }
  }

  function getSwiper(){
    $this->db->where('type','2');
    $this->db->order_by('sequence',"ASC");
    $res = $this->db->get('video')->result_array();

    foreach ($res as $key => $value) {
      $res[$key]['path'] = getVideoFile($value['id']).$value['path'];
    }
    return $res;
  }
  

}

/* End of file VideoModel.php */
?>