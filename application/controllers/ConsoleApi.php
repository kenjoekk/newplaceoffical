<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ConsoleApi extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    //預讀方法
    $this->load->model('venueModel');
  }
  public function login()
  {
    $data['memberId'] = $this->input->post('memberId');
    $data['memberPassword'] = $this->input->post('memberPassword');
    
    if(!empty($data['memberId']) && !empty($data['memberPassword'])){
      $this->load->model('loginModel');
      $status = $this->loginModel->checkAccount($data);
      switch ($status) {
        case 'id':
          set_session_error('无此帐号');
          redirect('console/login','refresh');
          break;
        case 'pwd':
          set_session_error('密码错误');
          redirect('console/login','refresh');
          break;
        case 'ok':
          $res = $this->loginModel->login($data);
          if(count($res) > 0){
            set_session_error('');
            set_user_session($res);
            redirect('console','refresh');
          }else{
            set_session_error('无此帐号，请联络管理员');
            redirect('console/login','refresh');
          }
          break;
        default:
          set_session_error('系统发生错误，请稍后在试');
          redirect('console/login','refresh');
          break;
      }
    }else{
      set_session_error('帐号或密码未填写');
      redirect('console/login','refresh');
    }
    
  }

  public function logout(){
    clean_user_session();
    redirect('console/login','refresh');
  }

  public function chkmemberPassword(){
    $mId=get_user_session('mId');
    $oldPassword = $this->input->post('oldPassword');
    $this->db->where('mId',$mId);
    $res = $this->db->get('member')->row_array();
    if($res['memberPassword'] == $oldPassword){
      $json_arr['status'] = '200';
      $json_arr['msg'] = '密码符合';  
    }else{
      $json_arr['status'] = '204';
      $json_arr['msg'] = '密码不符合';  
    }
    echo json_encode($json_arr);
  }
  public function changePassword(){
    $mId=get_user_session('mId');
    $memberPassword = $this->input->post('memberPassword');
    $this->db->where('mId',$mId);
    $this->db->update('member',array('memberPassword'=>$memberPassword));
    clean_user_session();
    redirect('console/login','refresh');
  }


  /***************
        会馆 
  ****************/

  public function addVenue(){
    $data['english_name'] = $this->input->post('english_name');
    $data['chiness_name'] = $this->input->post('chiness_name');
    $data['money'] = $this->input->post('money');
    $data['table_num'] = $this->input->post('table_num');
    $data['detail'] = $this->input->post('detail');
    $data['schedule'] = $this->input->post('start-schedule')."~".$this->input->post('end-schedule');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    $v_id = $this->venueModel->addVenue($data);
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $v_id.'venue.'.$fileType[1];
      copy($img_url['tmp_name'] , getVenuePath($v_id).$filename);
      $this->venueModel->editVenue($v_id,array('img_url'=>$filename.'?'.rand()));
    }
    redirect('console/venue_list','refresh');
    
  }

  public function editVenue(){
    $v_id = $this->input->post('v_id');
    $data['english_name'] = $this->input->post('english_name');
    $data['chiness_name'] = $this->input->post('chiness_name');
    $data['money'] = $this->input->post('money');
    $data['table_num'] = $this->input->post('table_num');
    $data['detail'] = $this->input->post('detail');
    $data['schedule'] = $this->input->post('start-schedule')."~".$this->input->post('end-schedule');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $v_id.'venue.'.$fileType[1];
      copy($img_url['tmp_name'] , getVenuePath($v_id).$filename);
      // $this->venueModel->editVenue($v_id,array('img_url'=>));
      $data['img_url'] = $filename.'?'.rand();
    }
    $this->venueModel->editVenue($v_id,$data);

    redirect('console/venue_list','refresh');
    
  }

  public function removeVenue(){
    $id = $this->input->post('id');
    $this->venueModel->removeVenue($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function moveVenue(){
    $id = $this->input->post('id');
    $type = $this->input->post('type');

    $this->venueModel->moveVenue($id,$type);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  /***************
        菜单 
  ****************/
  public function addCategory(){
    $data['m_name'] = $this->input->post('m_name');
    $cateImg = $_FILES['cateImg']['tmp_name']!=''?$_FILES['cateImg']:'';
    
    
    $m_id = $this->menuModel->addCategory($data);
    if($cateImg != ''){
      $filename = uniqid().$cateImg['name'];
      copy($cateImg['tmp_name'] , getCategoryPath().$filename);
      $this->menuModel->editCategory($m_id,array('m_pic'=>$filename.'?'.rand()));
    }
    redirect('console/menu_list','refresh');
  }

  public function editCategory(){
    $m_id = $this->input->post('m_id');
    $data['m_name'] = $this->input->post('m_name');
    $cateImg = $_FILES['cateImg']['tmp_name']!=''?$_FILES['cateImg']:'';
    
    if(!empty($m_id) && !empty($data['m_name'])){
      $res = $this->menuModel->editCategory($m_id,$data);
      if($cateImg != ''){
        $filename = uniqid().$cateImg['name'];
        copy($cateImg['tmp_name'] , getCategoryPath().$filename);
        $this->menuModel->editCategory($m_id,array('m_pic'=>$filename.'?'.rand()));
      }
    }
    redirect('console/menu_list','refresh');
  }

  public function removeCategory(){
    $data['id'] = $this->input->post('id');
    if(!empty($data['id'])){
      $res = $this->menuModel->removeCategory($data['id']);
      if($res){
        $json_arr['status'] = '200';
        $json_arr['msg'] = '刪除完成';  
      }else{
        $json_arr['status'] = '204';
        $json_arr['msg'] = '資料庫發生錯誤，請稍後再試．';
      }
    }else{
      $json_arr['status'] = '400';
      $json_arr['msg'] = '缺少ID';
    }
    echo json_encode($json_arr);
  }

  public function setCategorySeqence(){
    $data['id'] = $this->input->post('id');
    $data['type'] = $this->input->post('type');
    if(!empty($data['id'])){
      $res = $this->menuModel->setCategorySeqence($data);
      if($res){
        $json_arr['status'] = '200';
        $json_arr['msg'] = '排序完成';  
      }else{
        $json_arr['status'] = '204';
        $json_arr['msg'] = '资料库发生错误，请稍后在试。';
      }
    }else{
      $json_arr['status'] = '400';
      $json_arr['msg'] = '缺少ID或TYPE';
    }
    echo json_encode($json_arr);
  }

  public function addMenuBanner(){
    $data['m_b_name'] = $this->input->post('m_b_name');
    $m_b_url = $_FILES['m_b_url']['tmp_name']!=''?$_FILES['m_b_url']:'';
    
    
    $m_id = $this->menuModel->addBanner($data);
    if($m_b_url != ''){
      $filename = uniqid().$m_b_url['name'];
      copy($m_b_url['tmp_name'] , getCategoryPath().$filename);
      $this->menuModel->editBanner($m_id,array('m_b_url'=>$filename.'?'.rand()));
    }
    redirect('console/menu_banner','refresh');
  }
  
  public function editMenuBanner(){
    $m_b_id = $this->input->post('m_b_id');
    $data['m_b_name'] = $this->input->post('m_b_name');
    $m_b_url = $_FILES['m_b_url']['tmp_name']!=''?$_FILES['m_b_url']:'';
    
    if(!empty($m_b_id) && !empty($data['m_b_name'])){
      $res = $this->menuModel->editBanner($m_b_id,$data);
      if($m_b_url != ''){
        $filename = 'banner.jpg';
        copy($m_b_url['tmp_name'] , getCategoryPath().$filename);
        $this->menuModel->editBanner($m_b_id,array('m_b_url'=>$filename.'?'.rand()));
      }
    }
    redirect('console/menu_banner','refresh');
  }
  /***************
        商品 
  ****************/
  public function addProduct(){
    $data['m_id'] = $this->input->post('m_id');
    $data['p_name'] = $this->input->post('p_name');
    $data['p_price'] = $this->input->post('p_price');
    $p_pic = $_FILES['p_pic']['tmp_name']!=''?$_FILES['p_pic']:'';
    
    $cId = $this->productModel->addProduct($data);
    if($p_pic != ''){
      $filename = uniqid().$p_pic['name'];
      copy($p_pic['tmp_name'] , getProductPath($cId).$filename);
      $this->productModel->editProduct($cId,array('p_pic_url'=>$filename.'?'.rand()));
    }
    redirect('console/menu_list','refresh');
  }
  public function editProduct(){
    $p_id = $this->input->post('p_id');
    $data['p_name'] = $this->input->post('p_name');
    $data['p_price'] = $this->input->post('p_price');
    $p_pic_url = $_FILES['p_pic_url']['tmp_name']!=''?$_FILES['p_pic_url']:'';
    
    if(!empty($p_id) && !empty($data['p_name'])){
      $res = $this->productModel->editProduct($p_id,$data);
      if($p_pic_url != ''){
        $filename = uniqid().$p_pic_url['name'];
        copy($p_pic_url['tmp_name'] , getProductPath().$filename);
        $this->productModel->editProduct($p_id,array('p_pic_url'=>$filename.'?'.rand()));
      }
    }
    redirect('console/menu_list','refresh');
  }

  public function removeProduct(){
    $data['id'] = $this->input->post('id');
    if(!empty($data['id'])){
      $res = $this->productModel->removeProduct($data['id']);
      if($res){
        $json_arr['status'] = '200';
        $json_arr['msg'] = '刪除完成';  
      }else{
        $json_arr['status'] = '204';
        $json_arr['msg'] = '資料庫發生錯誤，請稍後再試．';
      }
    }else{
      $json_arr['status'] = '400';
      $json_arr['msg'] = '缺少ID';
    }
    echo json_encode($json_arr);
  }

  public function setProductSeqence(){
    $data['id'] = $this->input->post('id');
    $data['type'] = $this->input->post('type');
    if(!empty($data['id'])){
      $res = $this->productModel->setProductSeqence($data);
      if($res){
        $json_arr['status'] = '200';
        $json_arr['msg'] = '排序完成';  
      }else{
        $json_arr['status'] = '204';
        $json_arr['msg'] = '资料库发生错误，请稍后在试。';
      }
    }else{
      $json_arr['status'] = '400';
      $json_arr['msg'] = '缺少ID或TYPE';
    }
    echo json_encode($json_arr);
  }

  public function addMenus(){
    $num = $this->input->get('num');
    for ($i=0; $i < $num; $i++) { 
      $data['m_pic'] = '1.png';
      $m_id = $this->menuModel->addCategory($data);
      $this->menuModel->editCategory($m_id,array('m_pic'=>'menu_'.$m_id.'.png'));
    }
  }
  

}

/* End of file ConsoleApi.php */
