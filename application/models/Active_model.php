<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Active_model extends CI_Model {

	Public function getall($tabel)
	{
		$query = $this->db->get($tabel);
		return $query->result();
	}

	Public function simpan($table,$data)
	{
		$this->db->insert($table,$data);
		return ($this->db->affected_rows()!=1)?false:true;
	}

	Public function hapus($table,$id)
	{
		$this->db->where('id',$id);
		$this->db->delete($table);
		return ($this->db->affected_rows()!=1)?false:true;
	}

}

/* End of file Active_model.php */
/* Location: ./application/models/Active_model.php */