<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class PageApi extends CI_Controller {
 
   public function insert_form(){
      $name = $this->input->post('name');
      $phone = $this->input->post('phone');
      $question = $this->input->post('question');
      $venue = $this->input->post('venue');
      $date = $this->input->post('date');

      if($phone!=''){
        $data['name'] = $name;
        $data['phone'] = $phone;
        $data['question'] = $question;
        $data['venue_name'] = $venue;
        $data['order_date'] = $date;
        $this->load->model('advisoryModel');
        $this->advisoryModel->add_new($data);
        $json_arr['status'] = '200';
        $json_arr['msg'] = 'OK';
      }else{
        $json_arr['status'] = '400';
        $json_arr['msg'] = '栏位尚未填写完毕！';
      }
      echo json_encode($json_arr);
   }
 
 }
 
 /* End of file PageApi.php */
 
?>