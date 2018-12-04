<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {


	public function __construct()
    {
		
		parent::__construct();
		//預讀方法
    }

	

	public function home(){

	$homeHeaderBackground='homeHeaderBackground';
	

	$langType = $this->input->get('lang');
	$langType = $langType!=''?$langType:'';
	$lang = $this->language($langType);
	
	$data['lang'] = $lang;
	$data['homeHeaderBackground'] = $homeHeaderBackground;

	//data概念像封包，里面装key(lang、homeHeader) =>value
	$this->load->view('templates/header',$data);
	$this->load->view('templates/home');
    $this->load->view('templates/footer');



	}

	public function service(){
	$langType = $this->input->get('lang');
	$langType = $langType!=''?$langType:'';
	$lang = $this->language($langType);
	$data['lang']=$lang;

	$this->load->view('templates/header',$data);
	$this->load->view('templates/service');
    $this->load->view('templates/footer');



	}
	public function venue_list(){
		
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$pagination = $this->pagination();
		$data['page'] = $pagination;
		$data['lang']=$lang;
		// $config = $this->setPLink("/page/goEcho",300);
		// echo $this->pagination->create_links();
		


		$this->load->view('templates/header',$data);
		$this->load->view('templates/venue_list',$data);
		$this->load->view('templates/footer');


		$this->load->model('venueListModel');
		
		

		$m_res=$this->venueListModel->get_venue_page();

		

		// $id=isset($_GET['id'])?$_GET['id']:'';判斷$id有沒有值 沒有的話給他空值

		
	}
	public function venue_info(){

		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/venue_info');
		$this->load->view('templates/footer');



	}
	public function film(){
		
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;


		$this->load->view('templates/header',$data);
		$this->load->view('templates/film');
		$this->load->view('templates/footer');

	}
	public function wedding_feast(){

		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;

		$this->load->view('templates/header',$data);
		$this->load->view('templates/wedding_feast');
		$this->load->view('templates/footer');

	}
	public function wedding_feast_info(){
		
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/wedding_feast_info');
		$this->load->view('templates/footer');

	}
	public function banquet_service(){
		
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/banquet_service');
		$this->load->view('templates/footer');

	}
	public function events(){
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;

		$this->load->view('templates/header',$data);
		$this->load->view('templates/events');
		$this->load->view('templates/footer');
	}
	public function reservation(){
		$langType = $this->input->get('lang');
		$lang = $this->language($langType);
		$data['lang']=$lang;

		$this->load->view('templates/header',$data);
		$this->load->view('templates/reservation');
		$this->load->view('templates/footer');
	}	

	public function pagination(){
		$this->load->library('pagination');	

		$config['base_url']=site_url().'pages/venue/';
		$config['total_rows']=100;
		$config['per_page']=10;
		$config['uri_segment'] = 3;
		$config['num_links']=1;

		$config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = '<li class="page-item">'; //第一个链接的起始标签。
    $config['first_tag_close'] = '</li>'; //第一个链接的结束标签。
    $config['next_tag_open'] = '<li class="page-item">'; //下一页链接的起始标签。
    $config['next_tag_close'] = '</li>'; //下一页链接的结束标签。
    $config['prev_tag_open'] = '<li class="page-item">'; //上一页链接的起始标签。
    $config['prev_tag_close'] = '</li>'; //
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">'; //当前页链接的起始标签。可以加多个标签(因为当前页会自动屏蔽了a标签需要手动加上，为保持样式一致)
		$config['cur_tag_close'] = '</a ></li>'; //当前页链接的结束标签。
		$config['num_tag_open'] = '<li class="page-item"><a class="page-link"'; //数字链接的起始标签。
		$config['num_tag_close'] = '</a></li>'; //数字链接的结束标签。
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['first_link']= FALSE;
		$config['next_tag_open'] = '<li class="page-item"><a class="page-link"';
		$config['next_tag_close'] = '</a></li>';
		$config['next_link']= '下一页 <span class="oi oi-caret-right" aria-hidden="true"></span>';
		$config['prev_tag_open'] = '<li class="page-item"><a class="page-link"';
		$config['prev_tag_close'] = '</a></li>';
		$config['prev_link']= '<span class="oi oi-caret-left" aria-hidden="true"></span> 上一页';
		$config['last_link']= FALSE;


		$this->pagination->initialize($config);

		
		$link = $this->pagination->create_links();
		return $link;
	}


	public function language($langType){

		
		$this->lang->load('information',$langType);
		
    	//英文,中文（ 把资料夹的字读出来
		$home = $this->lang->line('home');		
		$banquet = $this->lang->line('banquet');
		$showcase = $this->lang->line('showcase');
		$package = $this->lang->line('package');
		$service = $this->lang->line('service');
		$events = $this->lang->line('events');
		$resort = $this->lang->line('resort');
	

	//把字放进data
	// $data['home']=$home;
	// $data['ch_home']=$ch_home;

	//用阵列方式把字放进data
		$com_ary=array('home'=>$home,
					'banquet'=>$banquet,
					'showcase'=>$showcase,
					'package'=>$package,
					'service'=>$service,
					'events'=>$events,
					'resort'=>$resort,
					'langType'=>$langType
		);
		return $com_ary;
	}
	
	
	private function setPLink($page,$mycount){
		$this->load->library('pagination');	
        $config['base_url'] = site_url().$page;
        $config['total_rows'] = $mycount;
        $config['per_page'] = 10;
        $config['num_links'] = 2; 

        $this->pagination->initialize( $config );
        return $config;
    }

	
}
