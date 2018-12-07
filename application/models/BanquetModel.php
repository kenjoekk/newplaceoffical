<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BanquetModel extends CI_Model {

  function addBanquet($data){
    $c = $this->db->count_all_results('banquet');
    $data['sequence'] = $c;
    $data['create_date'] = date('Y-m-d H:i:s');
    $data['update_date'] = date('Y-m-d H:i:s');
    $this->db->insert('banquet',$data);
    return $this->db->insert_id();
  }

  function editBanquet($id,$data){
    $data['update_date'] = date('Y-m-d H:i:s');
    $this->db->where('id',$id);
    return $this->db->update('banquet',$data);
  }

  function getBanquetList(){
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('banquet')->result_array();

    foreach ($res as $key => $value) {
      $res[$key]['img_url'] = getBanquetFile($value['id']).$value['img_url'];
    }
    return $res;
  }

  function getOnceBanquer($id){
    $this->db->where('id',$id);
    $res = $this->db->get('banquet')->row_array();
    $res['img_url'] = getBanquetFile($res['id']).$res['img_url'];
    return $res;
  }

  function removeBanquet($id){
    $this->db->where('id',$id);
    $banquet = $this->db->get('banquet')->row_array();
    
    $this->db->where('id',$id);
    $this->db->delete('banquet');

    $filename = explode('?',$banquet['img_url']);
    if(is_file(getBanquetPath($banquet['id']).$filename[0])){
      unlink(getBanquetPath($banquet['id']).$filename[0]);
    }

    $this->db->where('banquet_id',$id);
    $banquet_img = $this->db->get('banquet_img')->result_array();
    foreach ($banquet_img as $key => $value) {
      $this->removeBanquetImg($value['id']);
    }

    if(isDirEmpty(getBanquetPath($banquet['id']))){
      rmdir(getBanquetPath($banquet['id']));
    }

    $this->setSequence();
    return true;
  }

  function moveBanquet($id,$type){
    $this->db->where('id',$id);
    $this->db->select('sequence');
    $venue = $this->db->get('banquet')->row_array();
    $data = [];
    if($type=="up"){
      $data['sequence'] = $venue['sequence']-1.5;
    }else{
      $data['sequence'] = $venue['sequence']+1.5;
    }
    $this->db->where('id',$id);
    $this->db->update('banquet',$data);

    $this->setSequence();
    return true;
  }

  function setSequence(){
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('banquet')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('id',$value['id']);
      $this->db->update('banquet',array('sequence'=>$key));
    }
  }


  function get_once_banquet_with_img($id){
    $this->db->where('id',$id);
    $this->db->select('id,title');
    $banquet = $this->db->get('banquet')->row_array();

    $this->db->where('banquet_id',$banquet['id']);
    $this->db->order_by('sequence','ASC');
    $img = $this->db->get('banquet_img')->result_array();

    foreach ($img as $key => $value) {
      $img[$key]['path'] = getBanquetFile($banquet['id']).$value['path'];
    }

    $banquet['img'] = $img;
    return $banquet;
  }
  

  function addBanquetImg($data){
    $this->db->where('banquet_id',$data['banquet_id']);
    $c = $this->db->count_all_results('banquet_img');
    $data['sequence'] = $c;
    $this->db->insert('banquet_img',$data);
    return $this->db->insert_id();
  }

  function editBanquetImg($id,$data){
    $this->db->where('id',$id);
    return $this->db->update('banquet_img',$data);
  }


  function removeBanquetImg($id){
    $this->db->where('id',$id);
    $img = $this->db->get('banquet_img')->row_array();

    $this->db->where('id',$id);
    $this->db->delete('banquet_img');

    $filename = explode('?',$img['path']);
    if(is_file(getBanquetPath($img['banquet_id']).$filename[0])){
      unlink(getBanquetPath($img['banquet_id']).$filename[0]);
    }  
    $this->setImgSequence($img['banquet_id']);
    return true;
  }

  function moveBanquetImg($id,$type){
    $this->db->where('id',$id);
    $this->db->select('banquet_id,sequence');
    $img = $this->db->get('banquet_img')->row_array();
    $data = [];
    if($type=="up"){
      $data['sequence'] = $img['sequence']-1.5;
    }else{
      $data['sequence'] = $img['sequence']+1.5;
    }
    $this->db->where('id',$id);
    $this->db->update('banquet_img',$data);

    $this->setImgSequence($img['banquet_id']);
    return true;
  }

  function setImgSequence($b_id){
    $this->db->where('banquet_id',$b_id);
    $this->db->order_by('sequence','ASC');
    $res = $this->db->get('banquet_img')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('id',$value['id']);
      $this->db->update('banquet_img',array('sequence'=>$key));
    }
  }


}

/* End of file BanquestModel.php */

?>