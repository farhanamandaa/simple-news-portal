<?php
Class Model_admin extends CI_Model {

	function cek_user($table,$where){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function get_all_articles(){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelartikel.id_kategori,tabelkategori.nama_kategori');
		$this->db->from('tabelartikel');
		$this->db->join('tabelkategori', 'tabelartikel.id_kategori = tabelkategori.id_kategori','left');
		$this->db->order_by('id_artikel', 'DESC');
		return $this->db->get()->result_array();
	}

	function get_all_comments(){
		$this->db->select('tabelkomentar.id_komentar,tabelkomentar.isi_komentar,tabelkomentar.tanggal_komentar,tabelkomentar.nama_user,tabelkomentar.id_artikel,tabelartikel.judul_artikel');
		$this->db->from('tabelkomentar');
		$this->db->join('tabelartikel', 'tabelkomentar.id_artikel = tabelartikel.id_artikel','left');
		$this->db->order_by('tabelartikel.id_artikel', 'DESC');
		return $this->db->get()->result_array();
	}

	function get_all_categories(){
		return $this->db->get('tabelkategori')->result_array();
	}

	function get_articles($id){
		$this->db->select('tabelartikel.id_artikel,tabelartikel.judul_artikel,tabelartikel.isi_artikel,tabelartikel.tanggal_artikel,tabelartikel.id_kategori,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar', 'tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		$this->db->where('tabelartikel.id_artikel', $id);
		return $this->db->get()->row_array();
	}

	function get_num_articles(){
		return $this->db->get('tabelartikel')->num_rows();
	}

	function get_num_comments(){
		return $this->db->get('tabelkomentar')->num_rows();
	}

	function get_num_categories(){
		return $this->db->get('tabelkategori')->num_rows();
	}

	function query_images(){
		$this->db->select('tabelartikel.id_artikel,tabelgambar.nama_gambar');
		$this->db->from('tabelartikel');
		$this->db->join('tabelgambar','tabelartikel.id_artikel = tabelgambar.id_artikel','left');
		return $this->db->get()->result();
	}

}
?>