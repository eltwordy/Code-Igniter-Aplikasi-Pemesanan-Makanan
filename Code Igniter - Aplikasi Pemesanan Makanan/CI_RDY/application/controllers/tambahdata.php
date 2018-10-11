<?php
class tambah_data extends CI_Controller {
function add() {
$this->load->view('tambah_mhs');
}
function save() {
if($this->input->post('submit') ) {
$this->adddata1->insert();
redirect ('tbl_mhs/tambah_data');
}
}
}
?>
