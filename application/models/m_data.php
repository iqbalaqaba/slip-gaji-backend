<?php

/**
* Model untuk Auth
*/

class M_Data extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function tambah_akun($data){
		$this->db->insert('tbl_bio', $data);
		$id = $this->db->insert_id();
		return(isset($id)) ? $id : FALSE;
	}

	public function tambah_gaji($data){
		$this->db->insert('tbl_gaji',$data);
	}

  	public function tampil_session($id_user){
  		$this->db->select('tbl_bio.*,tbl_gaji.*');
	    $this->db->from('tbl_bio');
	    $this->db->join('tbl_gaji', 'tbl_bio.id_user = tbl_gaji.id_user', ' right');
	    $this->db->where('tbl_bio.id_user',$id_user);
  		$query = $this->db->get();

  		$results=$query->result();
  		return $results;
  	}

  	public function tampil_data(){
	    $this->db->select('tbl_bio.*,tbl_gaji.*');
	    $this->db->from('tbl_bio');
	    $this->db->join('tbl_gaji', 'tbl_bio.id_user = tbl_gaji.id_user', ' right');
	    $data = $this->db->get();
	    if($data->num_rows() > 0){
	        $results = $data->result();
	    }
	    return $results;
  	}

  	public function edit_gaji($where,$table){
  		return $this->db->get_where($table,$where);
  	}

  	public function update_gaji($where, $data, $table){
  		$this->db->where($where);
  		$this->db->update($table, $data);
  	}

  	public function hapus_user($where, $table){
  		$this->db->where($where);
  		$this->db->delete($table);
  	}

}

/* UNUSED PHP */

/*

	

	public function tampil_data(){
    $this->db->select('tbl_bio.*,tbl_gaji.*');
    $this->db->from('tbl_bio');
    $this->db->join('tbl_gaji', 'tbl_bio.id_user = tbl_gaji.id_user', ' right');
    $data = $this->db->get();
    if($data->num_rows() > 0){
        $results = $data->result();
    }
    return $results;
  	}
  	*/


  	/*
	    $row = $query->row();
	    $data_session = array(
	      'id_user' => $row->id_user,
	      'username' => $row->username,
	      'level' => $row->level,
	    );
  		$this->session->set_userdata($data_session);
		*/	

