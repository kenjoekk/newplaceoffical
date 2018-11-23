<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class console extends CI_Controller {


	public function __construct()
    {
		
		parent::__construct();
		//預讀方法
    }

	

	public function console(){
	   
	 $this->load->view('console/index');
	



	}

	
	
	
	
}
