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

	public function venue_setVenueImg($id){
		$user = get_user_session();
		$this->load->model('venueModel');
		$data['page'] = 'console/venue/setVenueImg';
		$data['path'] = 'venue_setVenueImg';
		$data['venue'] = $this->venueModel->get_once_venue_with_img($id);
		$this->load->view('console/layout',$data);
	}

	public function video_list($tab=""){
		$user = get_user_session();
		$this->load->model('videoModel');
		$data['page'] = 'console/video/list';
		$data['path'] = 'video_list';
		$data['list'] = $this->videoModel->getVideoList();
		$data['tab'] = $tab;
		
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
		$this->load->model('banquetModel');
		$data['page'] = 'console/banquet/list';
		$data['path'] = 'banquet_list';
		$data['list'] = $this->banquetModel->getBanquetList();
		$this->load->view('console/layout',$data);
	}

	public function banquet_add(){
		$user = get_user_session();
		$data['page'] = 'console/banquet/add';
		$data['path'] = 'banquet_add';
		$this->load->view('console/layout',$data);
	}

	public function banquet_edit($id){
		$user = get_user_session();
		$this->load->model('banquetModel');
		$data['page'] = 'console/banquet/edit';
		$data['path'] = 'banquet_edit';
		$data['banquet'] = $this->banquetModel->getOnceBanquer($id);
		$this->load->view('console/layout',$data);
	}

	public function banquet_setImg($id){
		$user = get_user_session();
		$this->load->model('banquetModel');
		$data['page'] = 'console/banquet/setImg';
		$data['path'] = 'banquet_setImg';
		$data['banquet'] = $this->banquetModel->get_once_banquet_with_img($id);
		$this->load->view('console/layout',$data);
  }

	public function news_list(){
		$user = get_user_session();
		$this->load->model('newsModel');
		$data['page'] = 'console/news/list';
		$data['path'] = 'news_list';
		$data['list'] = $this->newsModel->getNewsList();
		$this->load->view('console/layout',$data);
	}

	public function news_add(){
		$user = get_user_session();
		$data['page'] = 'console/news/add';
		$data['path'] = 'news_add';
		$this->load->view('console/layout',$data);
	}

	public function news_edit($id){
		$user = get_user_session();
		$this->load->model('newsModel');
		$data['page'] = 'console/news/edit';
		$data['path'] = 'news_edit';
		$data['news'] = $this->newsModel->getNewsOnce($id);
		$this->load->view('console/layout',$data);
	}

	public function advisory_list(){
		$user = get_user_session();
		$this->load->model('advisoryModel');
		$data['page'] = 'console/advisory/list';
		$data['path'] = 'advisory_list';
		$data['list'] = $this->advisoryModel->get_list();
		$this->load->view('console/layout',$data); 
	}

	

	
	
	
	
}
