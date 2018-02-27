<?php

Class Model_artikel extends CI_Model{

	function get_article(){
		$this->db->select('*');
		$this->db->from('tabelkategori'); 
		$this->db->order_by('id_kategori', 'ASC');
		return $this->db->get()->result_array();
	}

	function get_carousel(){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->limit(3);
		return $this->db->get()->result_array();
	}

	function get_index(){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->limit(5,3);
		return $this->db->get()->result_array();
	}

	function get_sidebar(){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->limit(5);
		return $this->db->get()->result_array();
	}

	function get_detail($id){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelartikel.id_kategori,tabelkategori.nama_kategori,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelkategori', 'tabelartikel.id_kategori = tabelkategori.id_kategori','left');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');		
		$this->db->where('tabelartikel.id_artikel', $id);
		return $this->db->get()->result_array();
	}

	function get_category($slug){
		$this->db->select("tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelgambar.nama_gambar,tabelkategori.nama_kategori");
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->join('tabelkategori', 'tabelartikel.id_kategori = tabelkategori.id_kategori','left');
		$this->db->where('nama_kategori', $slug);
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->result_array();
	}

	function get_search($keyword){
		$this->db->select("tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelgambar.nama_gambar");
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->like('tabelartikel.judul_artikel',$keyword);
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->result_array();	
	}

	function show_more($page){
		$offset = 5*$page;
		$limit	=5;
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->limit($offset,$limit);
		return $this->db->get()->result_array();		
	}
}

?>