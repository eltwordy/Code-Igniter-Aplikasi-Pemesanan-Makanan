<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
Class Control_Mhs extends CI_Controller {	
    function __construct(){  
        parent::__construct();  
		$this->load->model('model_mhs');
		$this->load->helper(array('url','form'));
    }
	function index(){
		$data['hasil'] = $this->model_mhs->bacadata();
		$this->load->view('view_mhs', $data);
	}
	function tambahdata(){
		if($this->input->post('submit')){
			$this->model_mhs->tambah();
			$this->session->set_flashdata('ini','data anda telah ditambahkan');
			redirect('control_mhs');
		}
		$this->load->view('tambah_mhs');
	}
	function updatedata($id_nim){
		if($this->input->post('submit')){
			$this->model_mhs->update($id_nim);
			$this->session->set_flashdata('ini','data anda telah diupdate');
			redirect('control_mhs');
		}
		$data['hasil']=$this->model_mhs->getById($id_nim);
		$this->load->view('view_update_mhs',$data);
	}
	public function deletedata($id_nim){
		$this->model_mhs->delete($id_nim);
		$this->session->set_flashdata('ini','data anda telah dihapus');
		redirect('control_mhs');
	}
}

