<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class menuModel extends CI_Model {

  function get_menu_product(){

    $m_res = $this->db->get('menu')->result_array();
    

    foreach($m_res as $key=>$value){

        $this->db->where('m_id', $value['m_id']); 
        $p_res[$value['m_id']] = $this->db->get('product')->result_array();
        $p_res[$value['m_id']]['menu'] = $value;

    }
    
    
    return $p_res;
  }

  function get_menu_banner(){

    $m_b_res=$this->db->get('menu_banner')->result_array();


    return $m_b_res;

  }

  function addCategory($data){
    $c = $this->db->count_all_results('menu');
    $data['m_sequence'] = $c;
    $this->db->insert('menu',$data);
    $id = $this->db->insert_id();
    return $id;
  }

  function editCategory($id,$data){
    $this->db->where('m_id',$id);
    return $this->db->update('menu',$data);

  }

  function getMenuList(){
    $this->db->order_by('m_sequence','ASC');
    $m_res = $this->db->get('menu')->result_array();
    

    foreach($m_res as $key=>$value){
      $m_res[$key]['m_pic'] = getCategoryFile().$value['m_pic'];
        $this->db->where('m_id', $value['m_id']); 
        $this->db->order_by('p_sequence','ASC');
        $res = $this->db->get('product')->result_array();
        foreach ($res as $pk => $pv) {
          $res[$pk]['p_pic_url'] = getProductFile().$pv['p_pic_url'];
        }
        $m_res[$key]['product'] = $res;

    }
    return $m_res;
  }

  function removeCategory($id){
    $this->db->where('m_id',$id);
    $menu = $this->db->get('menu')->row_array();

    $this->db->where('m_id',$id);
    $this->db->delete('menu');

    $filename = explode('?',$menu['m_pic']);
    if(is_file(getCategoryPath().$filename[0])){
      unlink(getCategoryPath().$filename[0]);
    }
    $this->db->where('m_id',$menu['m_id']);
    $product = $this->db->get('product')->result_array();
    $this->load->model('productModel');
    foreach ($product as $key => $value) {
      $this->productModel->removeProduct($value['p_id']);
    }
    $this->setSequence();
    return true;
  }

  function setCategorySeqence($data){
    $this->db->where('m_id',$data['id']);
    $category = $this->db->get('menu')->row_array();

    $this->db->where('m_id',$data['id']);
    if($data['type'] == 'up'){
      $this->db->update('menu',array('m_sequence'=>$category['m_sequence']-1.5));
    }else{
      $this->db->update('menu',array('m_sequence'=>$category['m_sequence']+1.5));
    }

    $this->setSequence();

    return true;
    
  }

  function setSequence(){
    $this->db->order_by('m_sequence','ASC');
    $res = $this->db->get('menu')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('m_id',$value['m_id']);
      $this->db->update('menu',array('m_sequence'=>$key));
    }
    
  }
// -------------------------banner------------------------
  function addBanner($data){
    $this->db->insert('meun_banner',$data);
    $id = $this->db->insert_id();
    return $id;
  }

  function editBanner($id,$data){
    $this->db->where('m_b_id',$id);
    return $this->db->update('meun_banner',$data);

  }

  function get_banner(){
    $res = $this->db->get('meun_banner')->row_array();
    $res['m_b_url'] = getCategoryFile().$res['m_b_url'];
    return $res;
  }



}

/* End of file MenuModel.php */

?>