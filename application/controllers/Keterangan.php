<?php
  class Keterangan extends CI_Controller {
    public function index($id) {
      if (empty($id)) {
        redirect(base_url('welcome/obat'));
      }
      $this->load->model('Obat_model');
      $result = $this->Obat_model->getObatById($id)->result();
      if(empty($result)) {
        redirect(base_url('welcome/obat'));
      }
      echo var_dump($result);
    }
  }
