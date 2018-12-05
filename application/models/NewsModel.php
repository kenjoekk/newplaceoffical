<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class NewsModel extends CI_Model {
  
    function addNews($data){
      $data['create_date'] = date('Y-m-d H:i:s');
      $data['update_date'] = date('Y-m-d H:i:s');
      $this->db->insert('news',$data);
      return $this->db->insert_id();
    }
  
    function editNews($id,$data){
      $data['update_date'] = date('Y-m-d H:i:s');
      $this->db->where('id',$id);
      return $this->db->update('news',$data);
    }
  
    function getNewsList(){
      $this->db->order_by('update_date','ASC');
      $res = $this->db->get('news')->result_array();
  
      foreach ($res as $key => $value) {
        $res[$key]['img_url'] = getNewsFile($value['id']).$value['img_url'];
      }
      return $res;
    }

    function getNewsOnce($id){
      $this->db->where('id',$id);
      $news = $this->db->get('news')->row_array();
      $news['img_url'] = getNewsFile($news['id']).$news['img_url'];
      return $news;
    }

    function removeNews($id){
      $this->db->where('id',$id);
      $banquet = $this->db->get('news')->row_array();
      
      $this->db->where('id',$id);
      $this->db->delete('news');
  
      $filename = explode('?',$banquet['img_url']);
      if(is_file(getNewsPath($banquet['id']).$filename[0])){
        unlink(getNewsPath($banquet['id']).$filename[0]);
        if(isDirEmpty(getNewsPath($banquet['id']))){
          rmdir(getNewsPath($banquet['id']));
        }
      }
      return true;
    }
    
  
  }
  
  /* End of file NewsModel.php */
  
?>