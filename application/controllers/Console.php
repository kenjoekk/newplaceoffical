<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class console extends CI_Controller {


	public function __construct()
    {	
		parent::__construct();
		//預讀方法
    }

	
	public function login(){
		$this->load->view('console/sign-in');
	}

	public function change_password(){
		$user = get_user_session();
		$data['page'] = 'console/changePassword';
		$data['path'] = 'index';
		$data['user'] = $user;
		$this->load->view('console/layout',$data);
	}


	public function index(){
		$user = get_user_session();
		$data['page'] = 'console/index';
		$data['path'] = 'index';
		$this->load->view('console/layout',$data);
	}

	public function menu_banner(){
		$user = get_user_session();
		$this->load->model('menuModel');
		$data['page'] = 'console/menu/banner';
		$data['path'] = 'menu_banner';
		$data['banner'] = $this->menuModel->get_banner();
		$this->load->view('console/layout',$data);
	}

	public function menu_list(){
		$user = get_user_session();
		$this->load->model('menuModel');
		$data['page'] = 'console/menu/list';
		$data['path'] = 'menu_list';
		$data['menu'] = $this->menuModel->getMenuList();
		$this->load->view('console/layout',$data);
	}

	
	
	
	
}
