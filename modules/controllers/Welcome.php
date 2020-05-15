<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$config['base_url']   = site_url('Welcome/index');
		$config['total_rows'] = $this->db->count_all('tb_barang');
		$config['per_page']	  = 5;
		$config['uri_segment']= 3;
		$choice 			  = $config["total_rows"] / $config['per_page'];
		$config["num_links"]  = floor($choice);

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['barang'] = $this->model_barang->tampil_data($config["per_page"], $data['page'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}
