<?php
Class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
		$this->load->model('Model_admin');
	}

	function index() {
        if ($this->session->has_userdata('status')){
            $this->load->view('admin/blank');
        } else {
            redirect(base_url('admin/login'));
        }
	}

	function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_cek_login',
           array('required' => 'You must provide a %s.')
        );
        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('admin/login');
        } else {
        	redirect(base_url('admin/module?module=home'));
        }
	}

	function cek_login(){
		$username 	=	$this->input->post('username');
		$password 	=	$this->input->post('password');
		$where		= 	array('username'  =>  $username);
        $cek		=	$this->Model_admin->cek_user('user',$where);
        if ($cek->num_rows() > 0){
        	$row 	=	$cek->row();
        	if (password_verify($password,$row->password)) {
                    $data_session   =   array(
                        'nama'  =>$username,
                        'status'=>'login');
                    $this->session->set_userdata($data_session);
                    return true;
        		} else {
        			$this->form_validation->set_message('cek_login','Password Salah');
        			return false;
        	}
        } 
	}

    function logout(){
        $this->session->sess_destroy();
       redirect(base_url('admin/login'));
    }

    function module(){
        $module =   $this->input->get('module');
        switch ($module) {
            case 'home':
                $data['detail']     =   array(
                                                'artikel'   =>  $this->Model_admin->get_num_articles(),
                                                'komentar'  =>  $this->Model_admin->get_num_comments(),
                                                'kategori'  =>  $this->Model_admin->get_num_categories()
                                                );
                $data['menu']       =   $this->load->view('admin/home',$data,TRUE);
                $this->load->view('admin/blank',$data);
                break;

            case 'articles':
                $id                 =   $this->input->get('id');
                $data['articles']   =   $this->Model_admin->get_all_articles();
                $data['categories'] =   $this->Model_admin->get_all_categories();
                $data['detail']     =   $this->Model_admin->get_articles($id);
                $data['menu']       =   $this->load->view('admin/articles', $data, TRUE);
                $this->load->view('admin/blank',$data);
                break;
            
            case 'comment':
                $data['comments']   =   $this->Model_admin->get_all_comments();
                $data['menu']       =   $this->load->view('admin/comment', $data, TRUE);
                $this->load->view('admin/blank',$data);
                break;

            case 'category':
                $data['categories'] =   $this->Model_admin->get_all_categories();
                $data['menu']       =   $this->load->view('admin/category', $data, TRUE);
                $this->load->view('admin/blank',$data);
                break;

            default:
                # code...
                break;
        }
    }

    function delete_articles(){
        if ($this->session->userdata('status') == FALSE ) {
            redirect(base_url('admin/login'));
        }
        $id                         =   $this->input->get('id');
        $image_path                 =   base_url().'assets/uploads/';
        $query_image                =   $this->Model_admin->query_images();
        foreach ($query_image as $record) {
            $filename               =   $image_path.$record->nama_gambar;
            if (file_exists($filename)) {
                unlink($filename);  
                $this->db->delete('tabelgambar',array('id_artikel'=>$id));
            }
            
            $this->db->delete('tabelartikel',array('id_artikel'=>$id));
            if ($this->db->affected_rows() > 0) {
                echo '<script>alert(\'Berhasil menghapus artikel\');history.go(-1);</script>';
            }else {
                echo '<script>alert(\'Gagal menghapus artikel\');history.go(-1);</script>';
            }
        }
    }

    function add_articles() {
            if ($this->session->userdata('status') == FALSE ) {
                redirect(base_url('admin/login'));
            }
            $slug                           = implode('-',(explode(' ',strtolower($this->input->post('judul_artikel')))));
            $post_data                      =   array(
                                            'judul_artikel'     =>  $this->input->post('judul_artikel'),
                                            'isi_artikel'       =>  $this->input->post('isi_artikel'),
                                            'tanggal_artikel'   =>  date('Y-m-d h:i:sa'),
                                            'slug'              =>  $slug,
                                            'id_kategori'       =>  $this->input->post('id_kategori')
                                        );
            $this->db->insert('tabelartikel',$post_data);
            $insert_id = $this->db->insert_id();
            if ($this->db->affected_rows() > 0) {
                    echo '<script>alert(\'Berhasil membuat artikel\');</script>';
            }else {
                    echo '<script>alert(\'Gagal membuat artikel\');</script>';
            }

        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $config['upload_path']          = FCPATH.'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $data = $this->upload->data();
                $post_upload                =   array(
                                            'nama_gambar'   =>$data['raw_name'].$data['file_ext'],
                                            'lokasi'        =>$data['raw_name'].$data['file_ext'],
                                            'id_artikel'    =>$insert_id);
                $this->db->insert('tabelgambar',$post_upload);
                if ($this->db->affected_rows() >0 ) {
                    echo '<script>alert(\'Berhasil upload\');history.go(-1);</script>';
                }else {
                    echo '<script>alert(\'Gagal upload\');history.go(-1);</script>';
                }
            }else {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
        }
    }

    function update_articles(){
        if ($this->session->userdata('status') == FALSE ) {
            redirect(base_url('admin/login'));
        }
        $id                      = $this->input->get('id');
        $slug                    = implode('-',(explode(' ',strtolower($this->input->post('judul_artikel')))));
        // (alternative) preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($this->input->post('judul_artikel')));
        $post_data               = array(
                                            'judul_artikel'     =>  $this->input->post('judul_artikel'),
                                            'isi_artikel'       =>  $this->input->post('isi_artikel'),
                                            'tanggal_artikel'   =>  date('Y-m-d h:i:sa'),
                                            'slug'              =>  $slug,
                                            'id_kategori'       =>  $this->input->post('id_kategori')
                                        );
        $query_image             = $this->db->get_where('tabelgambar',array('id_artikel'=>$id));

        $this->db->where('id_artikel',$id);
        $this->db->update('tabelartikel',$post_data);
        if ($this->db->affected_rows() > 0) {
                    echo '<script>alert(\'Berhasil membuat artikel\');</script>';
        }else {
                    echo '<script>alert(\'Gagal membuat artikel\');</script>';
        }

        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            foreach ($query_image->result() as $record) {
                $image_path             =   base_url().'assets/uploads/';
                $filename               =   $image_path.$record->nama_gambar;
                if (file_exists($filename)) {
                    unlink($filename);
                }
            }

            $config['upload_path']          = FCPATH.'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $data = $this->upload->data();
                $post_upload                =   array(
                                            'nama_gambar'   =>$data['raw_name'].$data['file_ext'],
                                            'lokasi'        =>$data['raw_name'].$data['file_ext']);
                $this->db->where('id_artikel',$id);
                $this->db->update('tabelgambar',$post_upload);
                if ($this->db->affected_rows() >0 ) {
                    echo '<script>alert(\'Berhasil upload\');history.go(-1);</script>';
                }else {
                    echo '<script>alert(\'Gagal upload\');history.go(-1);</script>';
                }
            }else {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
        }

    }

    function delete_comment(){
        if ($this->session->userdata('status') == FALSE ) {
            redirect(base_url('admin/login'));
        }
        $id                         =   $this->input->get('id');
        $this->db->delete('tabelkomentar',array('id_komentar'=>$id));
        if ($this->db->affected_rows() > 0) {
                echo '<script>alert(\'Berhasil menghapus komentar\');history.go(-1);</script>';
        }else {
                echo '<script>alert(\'Gagal menghapus komentar\');history.go(-1);</script>';
        }
    }

    function add_category(){
        if ($this->session->userdata('status') == FALSE ) {
            redirect(base_url('admin/login'));
        }
        $post_data                 =   array(
                                        'nama_kategori' =>  $this->input->post('nama_kategori')
                                    );
        $this->db->insert('tabelkategori',$post_data);
        if ($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Success Message...');
            redirect(base_url('admin/module?module=category'));
        }else {
            $this->session->set_flashdata('error', 'Error Message...');
            redirect(base_url('admin/module?module=category'));
        }   
    }

}
?>