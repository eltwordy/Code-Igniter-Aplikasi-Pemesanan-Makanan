<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Model_mhs extends CI_Model{ 	
	function bacadata(){
		$baca = $this->db->get('tbl_mhs');//mengambil tabel tbl_mhs
		//jika data lebih dari 0
		if ($baca->num_rows() > 0 ){
			foreach ($baca->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function tambah(){
		$nim = $this->input->post('nim');//input nim
		$nama  = $this->input->post('nama');//input nama
		$jk = $this->input->post('jk');
		$prodi = $this->input->post('prodi');
		$data = array (
			'nim' => $nim,//input kedalam field nim
			'nama'  => $nama,//input kedalam field nama
			'jk'=>$jk,
			'prodi'=>$prodi
		);	
		$this->db->insert('tbl_mhs',$data);//insert data di tabel tbl_tbl_mhs
	}
	function update($id_nim){	//update data berdasarkan nim
		$nim=$this->input->post('nim');	//input nim baru
		$nama=$this->input->post('nama');//input nama baru
		$jk=$this->input->post('jk');//input jk baru
		$prodi=$this->input->post('prodi');//input prodi baru
		$data=array(
			  'nim'=>$nim,//inputkan nim baru kedalam field nim
			  'nama'=>$nama,//inputkan nama baru kedalam field nama
			  'jk'=>$jk,//inputkan jk baru kedalam field jk
			  'prodi'=>$prodi//inputkan prodi baru kedalam field prodi
		);
		$this->db->where('nim',$id_nim);
		$this->db->update('tbl_mhs',$data);	//update data mahasiswa
	}
	function getById($id_nim){	//mengambil data berdasarkan id (primary key)
		return $this->db->get_where('tbl_mhs',array('nim'=>$id_nim))->row();
	}
	
	function delete($id_nim){//delete data berdasarkan nim
		$this->db->where('nim',$id_nim);
		$this->db->delete('tbl_mhs'); //query delete data mahasiswa
	}
}
