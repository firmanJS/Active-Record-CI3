<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//contoh global variabel di dalam kelas
class Active extends CI_Controller {
	public $tabelnya = "belajar";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('active_model', 'objactiv');
	}

	public function index()
	{
		$data['datanya'] = $this->objactiv->getall($this->tabelnya);
		$this->load->view('utama',$data);
	}

	public function add()
	{
		$this->load->view('add');
	}

	public function post()
	{
		$data['nama']=$this->input->post('nama');
		$data['alamat']=$this->input->post('alamat');
		$data['email']=$this->input->post('email');
		$hasil = $this->objactiv->simpan($this->tabelnya,$data);
		if ($hasil){
			$this->session->set_flashdata('berhasil', '<p>tersimpan</p>');
			redirect('active/add');
		}else{
			$this->session->set_flashdata('gagal', '<p>gagal tersimpan</p>');
			redirect('active/add');
		}
	}

	public function delete($id)
	{
		$hasil = $this->objactiv->hapus($this->tabelnya,$id);
		if ($hasil){
			$this->session->set_flashdata('berhasil', '<p>tehapus</p>');
			redirect('active');
		}else{
			$this->session->set_flashdata('gagal', '<p>gagal terhapus</p>');
			redirect('active');
		}
	}
}

/* End of file Active.php */
/* Location: ./application/controllers/Active.php */