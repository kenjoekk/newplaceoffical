<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ConsoleApi extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    //預讀方法
    $this->load->model('venueModel');
    $this->load->model('banquetModel');
    $this->load->model('newsModel');
    $this->load->model('videoModel');
    $this->load->model('advisoryModel');
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
    $data['sub_title'] = $this->input->post('sub_title');
    $data['offer'] = $this->input->post('offer');
    $data['money'] = $this->input->post('money');
    $data['table_num'] = $this->input->post('table_num');
    $data['detail'] = $this->input->post('detail');
    $data['schedule'] = $this->input->post('start-schedule')."~".$this->input->post('end-schedule');
    $img_url1 = $_FILES['img_url1']['tmp_name']!=''?$_FILES['img_url1']:'';
    $img_url2 = $_FILES['img_url2']['tmp_name']!=''?$_FILES['img_url2']:'';
    $img_url3 = $_FILES['img_url3']['tmp_name']!=''?$_FILES['img_url3']:'';
    $img_url4 = $_FILES['img_url4']['tmp_name']!=''?$_FILES['img_url4']:'';
    $img_url5 = $_FILES['img_url5']['tmp_name']!=''?$_FILES['img_url5']:'';
    $img_url6 = $_FILES['img_url6']['tmp_name']!=''?$_FILES['img_url6']:'';
    $img_url7 = $_FILES['img_url7']['tmp_name']!=''?$_FILES['img_url7']:'';
    $img_url8 = $_FILES['img_url8']['tmp_name']!=''?$_FILES['img_url8']:'';
    
    $v_id = $this->venueModel->addVenue($data);
    $img_url = '';
    if($img_url1 != ''){
      $fileType = explode('/',$img_url1['type']);
      $filename = $v_id.'-1-venue.'.$fileType[1];
      copy($img_url1['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url2 != ''){
      $fileType = explode('/',$img_url2['type']);
      $filename = $v_id.'-2-venue.'.$fileType[1];
      copy($img_url2['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url3 != ''){
      $fileType = explode('/',$img_url3['type']);
      $filename = $v_id.'-3-venue.'.$fileType[1];
      copy($img_url3['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url4 != ''){
      $fileType = explode('/',$img_url4['type']);
      $filename = $v_id.'-4-venue.'.$fileType[1];
      copy($img_url4['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url5 != ''){
      $fileType = explode('/',$img_url5['type']);
      $filename = $v_id.'-5-venue.'.$fileType[1];
      copy($img_url5['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url6 != ''){
      $fileType = explode('/',$img_url6['type']);
      $filename = $v_id.'-6-venue.'.$fileType[1];
      copy($img_url6['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url7 != ''){
      $fileType = explode('/',$img_url7['type']);
      $filename = $v_id.'-1=7-venue.'.$fileType[1];
      copy($img_url7['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }
    if($img_url8 != ''){
      $fileType = explode('/',$img_url8['type']);
      $filename = $v_id.'-8-venue.'.$fileType[1];
      copy($img_url8['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }

    if($img_url!=''){
      $img_url = rtrim($img_url, ",");
      $this->venueModel->editVenue($v_id,array('img_url'=>$img_url));
    }
    
    redirect('console/venue_list','refresh');
    
  }

  public function editVenue(){
    $v_id = $this->input->post('v_id');
    $data['english_name'] = $this->input->post('english_name');
    $data['chiness_name'] = $this->input->post('chiness_name');
    $data['sub_title'] = $this->input->post('sub_title');
    $data['offer'] = $this->input->post('offer');
    $data['money'] = $this->input->post('money');
    $data['table_num'] = $this->input->post('table_num');
    $data['detail'] = $this->input->post('detail');
    $data['schedule'] = $this->input->post('start-schedule')."~".$this->input->post('end-schedule');
    $img_url1 = $_FILES['img_url1']['tmp_name']!=''?$_FILES['img_url1']:'';
    $img_url2 = $_FILES['img_url2']['tmp_name']!=''?$_FILES['img_url2']:'';
    $img_url3 = $_FILES['img_url3']['tmp_name']!=''?$_FILES['img_url3']:'';
    $img_url4 = $_FILES['img_url4']['tmp_name']!=''?$_FILES['img_url4']:'';
    $img_url5 = $_FILES['img_url5']['tmp_name']!=''?$_FILES['img_url5']:'';
    $img_url6 = $_FILES['img_url6']['tmp_name']!=''?$_FILES['img_url6']:'';
    $img_url7 = $_FILES['img_url7']['tmp_name']!=''?$_FILES['img_url7']:'';
    $img_url8 = $_FILES['img_url8']['tmp_name']!=''?$_FILES['img_url8']:'';
    
    $img_url = '';
    if($img_url1 != ''){
      $fileType = explode('/',$img_url1['type']);
      $filename = $v_id.'-1-venue.'.$fileType[1];
      copy($img_url1['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val1 = $this->input->post('img_val1');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val1 != ''){
        $img_val1 = explode('/',$img_val1);
        $img_url .= $img_val1[count($img_val1)-1].',';
      }
    }

    if($img_url2 != ''){
      $fileType = explode('/',$img_url2['type']);
      $filename = $v_id.'-2-venue.'.$fileType[1];
      copy($img_url2['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val2 = $this->input->post('img_val1');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val2 != ''){
        $img_val2 = explode('/',$img_val2);
        $img_url .= $img_val2[count($img_val2)-1].',';
      }
    }

    if($img_url3 != ''){
      $fileType = explode('/',$img_url3['type']);
      $filename = $v_id.'-3-venue.'.$fileType[1];
      copy($img_url3['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val3 = $this->input->post('img_val3');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val3 != ''){
        $img_val3 = explode('/',$img_val3);
        $img_url .= $img_val3[count($img_val3)-1].',';
      }
    }

    if($img_url4 != ''){
      $fileType = explode('/',$img_url4['type']);
      $filename = $v_id.'-4-venue.'.$fileType[1];
      copy($img_url4['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val4 = $this->input->post('img_val4');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val4 != ''){
        $img_val4 = explode('/',$img_val4);
        $img_url .= $img_val4[count($img_val4)-1].',';
      }
    }
    if($img_url5 != ''){
      $fileType = explode('/',$img_url5['type']);
      $filename = $v_id.'-5-venue.'.$fileType[1];
      copy($img_url5['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val5 = $this->input->post('img_val5');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val5 != ''){
        $img_val5 = explode('/',$img_val5);
        $img_url .= $img_val5[count($img_val5)-1].',';
      }
    }

    if($img_url6 != ''){
      $fileType = explode('/',$img_url6['type']);
      $filename = $v_id.'-6-venue.'.$fileType[1];
      copy($img_url6['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val6 = $this->input->post('img_val6');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val6 != ''){
        $img_val6 = explode('/',$img_val6);
        $img_url .= $img_val6[count($img_val6)-1].',';
      }
    }

    if($img_url7 != ''){
      $fileType = explode('/',$img_url7['type']);
      $filename = $v_id.'-7-venue.'.$fileType[1];
      copy($img_url7['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val7 = $this->input->post('img_val7');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val7 != ''){
        $img_val7 = explode('/',$img_val7);
        $img_url .= $img_val7[count($img_val7)-1].',';
      }
    }

    if($img_url8 != ''){
      $fileType = explode('/',$img_url8['type']);
      $filename = $v_id.'-8-venue.'.$fileType[1];
      copy($img_url8['tmp_name'] , getVenuePath($v_id).$filename);
      $img_url.=$filename.'?'.rand().',';
    }else{
      $img_val8 = $this->input->post('img_val8');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($img_val8 != ''){
        $img_val8 = explode('/',$img_val8);
        $img_url .= $img_val8[count($img_val8)-1].',';
      }
    }


    if($img_url!=''){
      $img_url = rtrim($img_url, ",");
      $data['img_url'] = $img_url;
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

  public function setVenueImg(){
    $data['venue_id'] = $this->input->post('venue_id');
    $data['type'] = $this->input->post('img_type');
    $img_id = $this->input->post('img_id');
    
    $venue_img1 = isset($_FILES['venue_img1']) && $_FILES['venue_img1']['tmp_name']!=''?$_FILES['venue_img1']:'';
    $venue_img2 = isset($_FILES['venue_img2']) && $_FILES['venue_img2']['tmp_name']!=''?$_FILES['venue_img2']:'';
    $venue_img3 = isset($_FILES['venue_img3']) && $_FILES['venue_img3']['tmp_name']!=''?$_FILES['venue_img3']:'';

    if($img_id != ""){
      $id = $img_id;
    }else{
      $id = $this->venueModel->addVenueImg($data);
    }

    $updateData = '';
    if($venue_img1 != ''){
      $fileType = explode('/',$venue_img1['type']);
      $filename = $data['venue_id'].'-'.$id.'-venue_img1.'.$fileType[1];
      copy($venue_img1['tmp_name'] , getVenuePath($data['venue_id']).$filename);
      
      $updateData .= $filename.'?'.rand().',';
    }else{
      $venue_img1_org = $this->input->post('venue_img1_org');
      // echo "venue_img1_org: ".$venue_img1_org.'<br>';
      if($venue_img1_org != ''){
        $venue_img1_org = explode('/',$venue_img1_org);
        $updateData .= $venue_img1_org[count($venue_img1_org)-1].',';
      }
    }

    if($venue_img2 != ''){
      $fileType = explode('/',$venue_img2['type']);
      $filename = $data['venue_id'].'-'.$id.'-venue_img2.'.$fileType[1];
      copy($venue_img2['tmp_name'] , getVenuePath($data['venue_id']).$filename);
      
      $updateData .= $filename.'?'.rand().',';
    }else{
      $venue_img2_org = $this->input->post('venue_img2_org');
      // echo "venue_img2_org: ".$venue_img2_org.'<br>';
      if($venue_img2_org != ''){
        $venue_img2_org = explode('/',$venue_img2_org);
        $updateData .= $venue_img2_org[count($venue_img2_org)-1].',';
      }
    }

    if($venue_img3 != ''){
      $fileType = explode('/',$venue_img3['type']);
      $filename = $data['venue_id'].'-'.$id.'-venue_img3.'.$fileType[1];
      copy($venue_img3['tmp_name'] , getVenuePath($data['venue_id']).$filename);
      
      $updateData .= $filename.'?'.rand().',';
    }else{
      $venue_img3_org = $this->input->post('venue_img3_org');
      // echo "venue_img3_org: ".$venue_img3_org.'<br>';
      if($venue_img3_org != ''){
        $venue_img3_org = explode('/',$venue_img3_org);
        $updateData .= $venue_img3_org[count($venue_img3_org)-1].',';
      }
    }

    if($updateData != ''){
      $updateData = rtrim($updateData, ",");
      // echo "updateData: ".$updateData.'<br>';
      $this->venueModel->editVenueImg($id,array('path'=>$updateData));
    }
    
    redirect('console/venue_setVenueImg/'.$data['venue_id'],'refresh');

  }

  public function removeVenueImg(){
    $imgid = $this->input->post('imgid');
    $this->venueModel->removeVenueImg($imgid);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function moveVenueImg(){
    $id = $this->input->post('id');
    $type = $this->input->post('type');

    $this->venueModel->moveVenueImg($id,$type);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }
  /***************
        方案
  ****************/

  public function addBanquet(){
    $data['title'] = $this->input->post('title');
    $data['money'] = $this->input->post('money');
    $data['detail'] = $this->input->post('detail');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    $b_id = $this->banquetModel->addBanquet($data);
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $b_id.'banquet.'.$fileType[1];
      copy($img_url['tmp_name'] , getBanquetPath($b_id).$filename);
      $this->banquetModel->editBanquet($b_id,array('img_url'=>$filename.'?'.rand()));
    }
    redirect('console/banquet_list','refresh');
    
  }

  public function editBanquet(){
    $b_id = $this->input->post('b_id');
    $data['title'] = $this->input->post('title');
    $data['money'] = $this->input->post('money');
    $data['detail'] = $this->input->post('detail');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $b_id.'banquet.'.$fileType[1];
      copy($img_url['tmp_name'] , getBanquetPath($b_id).$filename);
      // $this->banquetModel->editBanquet($b_id,array('img_url'=>));
      $data['img_url'] = $filename.'?'.rand();
    }
    $this->banquetModel->editBanquet($b_id,$data);

    redirect('console/banquet_list','refresh');
    
  }

  public function removeBanquet(){
    $id = $this->input->post('id');
    $this->banquetModel->removeBanquet($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function moveBanquet(){
    $id = $this->input->post('id');
    $type = $this->input->post('type');

    $this->banquetModel->moveBanquet($id,$type);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function addBanquetImg(){
    $data['banquet_id'] = $this->input->post('banquet_id');
    $path = $_FILES['path']['tmp_name']!=''?$_FILES['path']:'';

    $id = $this->banquetModel->addBanquetImg($data);
    if($path != ''){
      $fileType = explode('/',$path['type']);
      $filename = $data['banquet_id'].'-'.$id.'-banquet.'.$fileType[1];
      copy($path['tmp_name'] , getBanquetPath($data['banquet_id']).$filename);
      $data['path'] = $filename.'?'.rand();
      $this->banquetModel->editBanquetImg($id,array('path'=>$filename));
    }
    
    redirect('console/banquet_setImg/'.$data['banquet_id'],'refresh');
  }

  public function editBanquetImg(){
    $id = $this->input->post('id');
    $banquet_id = $this->input->post('banquet_id');
    $path = $_FILES['path']['tmp_name']!=''?$_FILES['path']:'';

    // $id = $this->banquetModel->addBanquetImg($data);
    if($path != ''){
      $fileType = explode('/',$path['type']);
      $filename = $banquet_id.'-'.$id.'-banquet.'.$fileType[1];
      copy($path['tmp_name'] , getBanquetPath($banquet_id).$filename);
      $data['path'] = $filename.'?'.rand();
      $this->banquetModel->editBanquetImg($id,array('path'=>$filename));
    }
    
    redirect('console/banquet_setImg/'.$banquet_id,'refresh');
  }

  public function removeBanquetImg(){
    $id = $this->input->post('id');
    $this->banquetModel->removeBanquetImg($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function moveBanquetImg(){
    $id = $this->input->post('id');
    $type = $this->input->post('type');
    $this->banquetModel->moveBanquetImg($id,$type);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  /***************
        活动
  ****************/
  
  public function addNews(){
    $data['active_url'] = $this->input->post('active_url');
    $order_confirm = $this->input->post('order_confirm');
    $data['title'] = $this->input->post('title');
    $data['sub_title'] = $this->input->post('sub_title');
    $data['detail'] = $this->input->post('detail');
    $data['hot_num'] = $this->input->post('hot_num');
    $data['order_num'] = $this->input->post('order_num');
    $data['active_time'] = $this->input->post('active_time');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    if($order_confirm){
      $data['type'] = 0;
    }else{
      $data['type'] = 1;
    }
    $n_id = $this->newsModel->addNews($data);
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $n_id.'news.'.$fileType[1];
      copy($img_url['tmp_name'] , getNewsPath($n_id).$filename);
      $this->newsModel->editNews($n_id,array('img_url'=>$filename.'?'.rand()));
    }
    redirect('console/news_list','refresh');
  }

  public function editNews(){
    $n_id = $this->input->post('n_id');
    $data['active_url'] = $this->input->post('active_url');
    $order_confirm = $this->input->post('order_confirm');
    $data['title'] = $this->input->post('title');
    $data['sub_title'] = $this->input->post('sub_title');
    $data['detail'] = $this->input->post('detail');
    $data['hot_num'] = $this->input->post('hot_num');
    $data['order_num'] = $this->input->post('order_num');
    $data['active_time'] = $this->input->post('active_time');
    $img_url = $_FILES['img_url']['tmp_name']!=''?$_FILES['img_url']:'';
    
    if($order_confirm){
      $data['type'] = 0;
    }else{
      $data['type'] = 1;
    }
    $this->newsModel->editNews($n_id,$data);
    if($img_url != ''){
      $fileType = explode('/',$img_url['type']);
      $filename = $n_id.'news.'.$fileType[1];
      copy($img_url['tmp_name'] , getNewsPath($n_id).$filename);
      $this->newsModel->editNews($n_id,array('img_url'=>$filename.'?'.rand()));
    }
    redirect('console/news_list','refresh');
  }
  
  public function removeNews(){
    $id = $this->input->post('id');
    $this->newsModel->removeNews($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  /***************
        视频区
  ****************/

  public function addVideo(){
    $data['type'] = $this->input->post('type');
    $tab = $this->input->post('tab');
    $path = $_FILES['path']['tmp_name']!=''?$_FILES['path']:'';

    $n_id = $this->videoModel->addVideo($data);
    if($path != ''){
      $fileType = explode('/',$path['type']);
      $filename = $n_id.'video.'.$fileType[1];
      copy($path['tmp_name'] , getVideoPath($n_id).$filename);
      $this->videoModel->editVideo($n_id,array('path'=>$filename.'?'.rand()));
    }
    redirect('console/video_list/'.$tab,'refresh');
  }

  public function editVideo(){
    $n_id = $this->input->post('id');
    $data['type'] = $this->input->post('type');
    $tab = $this->input->post('tab');
    $path = $_FILES['path']['tmp_name']!=''?$_FILES['path']:'';

    // $n_id = $this->videoModel->addVideo($data);
    if($path != ''){
      $fileType = explode('/',$path['type']);
      $filename = $n_id.'video.'.$fileType[1];
      copy($path['tmp_name'] , getVideoPath($n_id).$filename);
      $this->videoModel->editVideo($n_id,array('path'=>$filename.'?'.rand()));
    }
    redirect('console/video_list/'.$tab,'refresh');
  }

  public function removeVideo(){
    $id = $this->input->post('id');
    $this->videoModel->removeVideo($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function moveVideo(){
    $id = $this->input->post('id');
    $type = $this->input->post('type');
    $this->videoModel->moveVideo($id,$type);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  /***************
        預約
  ****************/
  
  public function doneAdvisory(){
    $id = $this->input->post('id');
    $this->advisoryModel->doneAdvisory($id);
    $json_arr['status'] = '200';
    $json_arr['msg'] = '成功';
    echo json_encode($json_arr);
  }

  public function insertRemark(){
    $id = $this->input->post('id');
    $data['remark'] = $this->input->post('remark');

    $this->advisoryModel->updateAdvisory($id,$data);
    redirect('console/advisory_list','refresh');
  }

  public function test(){
    rmdir(getNewsPath(5));
  }

}

/* End of file ConsoleApi.php */
