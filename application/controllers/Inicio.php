<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url'); //cargamos el helper para redireccionar y usar las urls
        $this->load->database();
    }
    public function index()
    {
        $this->session->set_userdata('account_type', 'admin');
        $this->session->set_userdata('folder_name', 'lugar');
        $this->session->set_userdata('page_name', 'lugar_index');
        $this->session->set_userdata('page_title', 'Tablero de administración');
        $this->load->view('index');
    }
    public function new_place()
    {
        $this->session->set_userdata('account_type', 'admin');
        $this->session->set_userdata('folder_name', 'lugar');
        $this->session->set_userdata('page_name', 'new_place');
        $this->session->set_userdata('page_title', 'Ingreso de Lugar');
        $this->load->view('index');
    }
    public function get_municipio($class_id)
    {
        $sections = $this->db->get_where('municipio',array('id_dpto'=>$class_id))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['id_municipio'] . '">' . $row['nombre_municipio'] . '</option>';
        }
    }
	public function insert_place(){
		$insert_data = array(
			'nombre_lugar'=>$this->input->post('nombre_lugar'),
			'direccion'=>$this->input->post('direccion'),
			'descripcion'=>$this->input->post('descripcion'),
			'id_municipio'=>$this->input->post('id_municipio'),
			'id_tl'=>$this->input->post('id_tl'),
		);
		$this->db->insert('lugar',$insert_data);
		$this->session->set_flashdata('flash_message', 'Lugar Agregado Exitosamente! ');
		redirect(base_url().'inicio/', 'refresh');
	}
	public function list(){
		$this->session->set_userdata('account_type', 'admin');
        $this->session->set_userdata('folder_name', 'lugar');
        $this->session->set_userdata('page_name', 'list');
        $this->session->set_userdata('page_title', 'Lista de Lugares');
        $this->load->view('index');
	}
}
