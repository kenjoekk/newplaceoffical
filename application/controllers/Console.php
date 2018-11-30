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

	public function venue_list(){
		$user = get_user_session();
		$this->load->model('venueModel');
		$data['page'] = 'console/venue/list';
		$data['path'] = 'venue_list';
		$data['list'] = $this->venueModel->get_venue_list();
		$this->load->view('console/layout',$data);
	}

	public function venue_add(){
		$user = get_user_session();
		$data['page'] = 'console/venue/add';
		$data['path'] = 'venue_add';
		$this->load->view('console/layout',$data);
	}

	public function venue_edit($id){
		$user = get_user_session();
		$this->load->model('venueModel');
		$data['page'] = 'console/venue/edit';
		$data['path'] = 'venue_edit';
		$data['venue'] = $this->venueModel->get_once_venue($id);
		$this->load->view('console/layout',$data);
	}

	public function video_list(){
		$user = get_user_session();
		$data['page'] = 'console/video/list';
		$data['path'] = 'video_list';
		$this->load->view('console/layout',$data);
	}

	public function video_add(){
		$user = get_user_session();
		$data['page'] = 'console/video/add';
		$data['path'] = 'video_add';
		$this->load->view('console/layout',$data);
	}

	public function banquet_list(){
		$user = get_user_session();
		$data['page'] = 'console/banquet/list';
		$data['path'] = 'banquet_list';
		$this->load->view('console/layout',$data);
	}

	public function banquet_add(){
		$user = get_user_session();
		$data['page'] = 'console/banquet/add';
		$data['path'] = 'banquet_add';
		$this->load->view('console/layout',$data);
	}

	public function news_list(){
		$user = get_user_session();
		$data['page'] = 'console/news/list';
		$data['path'] = 'news_list';
		$this->load->view('console/layout',$data);
	}

	public function news_add(){
		$user = get_user_session();
		$data['page'] = 'console/news/add';
		$data['path'] = 'news_add';
		$this->load->view('console/layout',$data);
	}

	

	
	
	
	
}
