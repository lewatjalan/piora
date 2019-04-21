<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/home');

	}

	public function artikel()
	{
		$this->load->view('user/artikel');

	}

	public function obat()
	{

		$data['a'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'a%' ORDER BY `obat`.`nama_generik` ASC");
		$data['b'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'b%' ORDER BY `obat`.`nama_generik` ASC");
		$data['c'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'c%' ORDER BY `obat`.`nama_generik` ASC");
		$data['d'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'd%' ORDER BY `obat`.`nama_generik` ASC");
		$data['e'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'e%' ORDER BY `obat`.`nama_generik` ASC");
		$data['f'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'f%' ORDER BY `obat`.`nama_generik` ASC");
		$data['g'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'g%' ORDER BY `obat`.`nama_generik` ASC");
		$data['h'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'h%' ORDER BY `obat`.`nama_generik` ASC");
		$data['i'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'i%' ORDER BY `obat`.`nama_generik` ASC");
		$data['j'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'j%' ORDER BY `obat`.`nama_generik` ASC");
		$data['k'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'k%' ORDER BY `obat`.`nama_generik` ASC");
		$data['l'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'l%' ORDER BY `obat`.`nama_generik` ASC");
		$data['m'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'm%' ORDER BY `obat`.`nama_generik` ASC");
		$data['n'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'n%' ORDER BY `obat`.`nama_generik` ASC");
		$data['o'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'o%' ORDER BY `obat`.`nama_generik` ASC");
		$data['p'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'p%' ORDER BY `obat`.`nama_generik` ASC");
		$data['q'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'q%' ORDER BY `obat`.`nama_generik` ASC");
		$data['r'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'r%' ORDER BY `obat`.`nama_generik` ASC");
		$data['s'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 's%' ORDER BY `obat`.`nama_generik` ASC");
		$data['t'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 't%' ORDER BY `obat`.`nama_generik` ASC");
		$data['u'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'u%' ORDER BY `obat`.`nama_generik` ASC");
		$data['v'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'v%' ORDER BY `obat`.`nama_generik` ASC");
		$data['w'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'w%' ORDER BY `obat`.`nama_generik` ASC");
		$data['x'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'x%' ORDER BY `obat`.`nama_generik` ASC");
		$data['y'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'y%' ORDER BY `obat`.`nama_generik` ASC");
		$data['z'] = $this->db->query("SELECT * FROM `obat` WHERE `nama_generik` LIKE 'z%' ORDER BY `obat`.`nama_generik` ASC");

		$this->load->view('user/obat', $data);

	}

	public function faq()
	{
		$this->load->view('user/faq');

	}
}
