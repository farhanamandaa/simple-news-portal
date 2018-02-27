<?php
Class Praktek extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_artikel');
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$this->load->view('home/main');
		$this->load->view('home/header',$data);
	}

	function index() {
		$data['data_carousel']	=  $this->Model_artikel->get_carousel();
		$data['data_test']	=  $this->Model_artikel->get_index();
		$data['data_sidebar'	]	=  $this->Model_artikel->get_sidebar();
		$this->load->view('home/carousel',$data);
		$this->load->view('home/home',$data);
		$this->load->view('home/sidebar',$data);	

		
		// $this->load->view('halaman_view',$data);
	}

	function category($slug){
		$slug = $this->uri->segment('2');
		$data['category']		=  $this->Model_artikel->get_category($slug);
		$data['data_sidebar']	=  $this->Model_artikel->get_sidebar();
		$this->load->view('home/category',$data);
		$this->load->view('home/sidebar',$data);	
	}

	function read($id){
		$id = $this->uri->segment('2');
		$data['category']		=  $this->Model_artikel->get_category($id);
		$data['details']		=  $this->Model_artikel->get_detail($id);
		if (empty($data['details']))
        {
                show_404();
        }
		$this->load->view('read',$data);
	}

	function search($keyword){
		$keyword = $this->input->get('search');
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$data['data_search']	=  $this->Model_artikel->get_search($keyword);
		$this->load->view('search',$data);
	}

}