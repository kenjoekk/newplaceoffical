<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

  function addProduct($data){
    $this->db->where('m_id',$data['m_id']);
    $c = $this->db->count_all_results('product');

    $data['p_sequence'] = $c;
    $this->db->insert('product',$data);
    $id = $this->db->insert_id();
    return $id;
  }

  function editProduct($id,$data){
    $this->db->where('p_id',$id);
    return $this->db->update('product',$data);

  }

  function removeProduct($id){
    $this->db->where('p_id',$id);
    $product = $this->db->get('product')->row_array();

    $this->db->where('p_id',$id);
    $this->db->delete('product');

    $filename = explode('?',$product['p_pic_url']);
    
    if(is_file(getProductPath().$filename[0])){
      unlink(getProductPath().$filename[0]);
    }

    $this->setSequence($product['m_id']);
    return true;
  }

  function setProductSeqence($data){
    $this->db->where('p_id',$data['id']);
    $product = $this->db->get('product')->row_array();

    $this->db->where('p_id',$data['id']);
    if($data['type'] == 'up'){
      $this->db->update('product',array('p_sequence'=>$product['p_sequence']-1.5));
    }else{
      $this->db->update('product',array('p_sequence'=>$product['p_sequence']+1.5));
    }
    // echo $product['m_id'];
    $this->setSequence($product['m_id']);

    return true;
    
  }

  function setSequence($m_id){
    $this->db->where('m_id',$m_id);
    $this->db->order_by('p_sequence','ASC');
    $res = $this->db->get('product')->result_array();
    foreach ($res as $key => $value) {
      $this->db->where('p_id',$value['p_id']);
      $this->db->update('product',array('p_sequence'=>$key));
    }
    
  }

}

/* End of file ProductModel.php */

?>