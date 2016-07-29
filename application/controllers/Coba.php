<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//ini contoh global variabel di luar kelas
 $tabelnya = "belajar";
class Coba extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('active_model', 'objactiv');
	}

	public function index()
	{
		global $tabelnya;
		$data['datanya'] = $this->objactiv->getall($tabelnya);
		$this->load->view('utama',$data);
	}

}

/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */