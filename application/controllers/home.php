<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	    $this->load->library('form_validation');
  }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function projects()
	{
		$this->load->view('header');
		$this->load->view('projects');
		$this->load->view('footer');
	}
	public function aboutus()
	{
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function email()
	{
		$correo = $this->input->post('correo');
		$nombre = $this->input->post('nombre');
		$mensaje = $this->input->post('mensaje');
		$this->load->library('email');
		$this->email->from($correo, $nombre);
		//$this->email->to('abic.ong2019@gmail.com');
		$this->email->to('jozueguther@gmail.com');
		$this->email->subject('Contacto Pagina');

		$this->email->message($mensaje);
        if($this->email->send())
         {
			redirect(base_url() . 'home/', 'refresh');
         }

	}
}
