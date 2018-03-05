<?php
Class Praktek extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_artikel');
	}

	function index() {
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$data['data_carousel']	=  $this->Model_artikel->get_carousel();
		$data['data_test']	=  $this->Model_artikel->get_index();
		$data['data_sidebar']	=  $this->Model_artikel->get_sidebar();
		$this->load->view('home/main');
		$this->load->view('home/header',$data);
		$this->load->view('home/carousel',$data);
		$this->load->view('home/home',$data);
		$this->load->view('home/sidebar',$data);	

		
		// $this->load->view('halaman_view',$data);
	}

	function category($slug){
		$slug = $this->uri->segment('2');
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$data['category']		=  $this->Model_artikel->get_category($slug);
		$data['data_sidebar']	=  $this->Model_artikel->get_sidebar();
		$this->load->view('home/main');
		$this->load->view('home/header',$data);
		$this->load->view('home/category',$data);
		$this->load->view('home/sidebar',$data);	
	}

	function read($id){
		$id = $this->uri->segment('2');
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$data['category']		=  $this->Model_artikel->get_category($id);
		$data['details']		=  $this->Model_artikel->get_detail($id);
		$data['comments']		=  $this->Model_artikel->get_comment($id);
		if (empty($data['details']))
        {
                show_404();
        }
        $this->load->view('home/main');
		$this->load->view('home/header',$data);
		$this->load->view('read',$data);
	}

	function search($keyword){
		$keyword = $this->input->get('search');
		$data['data_artikel']	=  $this->Model_artikel->get_article();
		$data['data_search']	=  $this->Model_artikel->get_search($keyword);
		$this->load->view('home/main');
		$this->load->view('home/header',$data);
		$this->load->view('search',$data);
	}

	function get_berita(){
		$page							=	$_GET['page'];
		$data['berita'] 				=	$this->Model_artikel->show_more($page);
		if ($data['berita']->num_rows()>0 ) {
			$data['berita'] 			= $data['berita']->result_array();
			$this->load->view('home/ajax',$data);
		}
	}

	function add_comment(){
		$post_comment					=	array(
											'isi_komentar'		=>	$this->input->post('komentar'),
											'nama_user'			=>	$this->input->post('nama'),
											'tanggal_komentar'	=>	date('Y-m-d h:i:sa'),
											'id_artikel'		=>	$this->input->get('id')
										);
		$this->db->insert('tabelkomentar',$post_comment);
		if ($this->db->affected_rows() > 0) {
                echo '<script>alert(\'Berhasil menambah komentar\');history.go(-1);</script>';
        }else {
                echo '<script>alert(\'Gagal menambah komentar\');history.go(-1);</script>';
        }

	}

}