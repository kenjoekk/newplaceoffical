<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

  function checkAccount($data){
    $this->db->where('memberId',$data['memberId']);
    $c = $this->db->count_all_results('member');
    if($c > 0){
      $this->db->where('memberId',$data['memberId']);
      $this->db->where('memberPassword',$data['memberPassword']);
      $c2 = $this->db->count_all_results('member');
      if($c2 > 0){
        return 'ok';
      }else{
        return 'pwd';
      }
    }else{
      return 'id';
    }
  }
  function login($data){
    $this->db->where('memberId',$data['memberId']);
    $this->db->where('memberPassword',$data['memberPassword']);
    $this->db->select('mId,memberId,mName');
    $res = $this->db->get('member')->row_array();
    return $res;
  }  

}

/* End of file LoginModel.php */

?>