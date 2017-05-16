<?php 

/**
* 
*/
class Sucursales extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        if (!$this->session->userdata('login'))
        {
            header("Location:" . base_url());
        }
        else
        {
            //echo "no";
        }
	}

    public function index()
    {
        /*$this->load->library('session');
        $this->session->unset_userdata('login');*/
        $data = array('title' => 'Dashboard', 'app' => 'Likequest');
        $this->load->view("guest/head", $data);

        $data = array('mensaje' => 'estas en dashboard');

        $result = $this->db->get('sucursales');
        $data   = array('consulta' => $result);

        $this->load->view("sucursal/crearSucursal", $data);
        $this->load->view("guest/nav");

        $data = array('post' => 'Blog', 'descripcion' => 'Biendvenido al dashboard de codeiniter');
        $this->load->view("guest/footer");
        //$this->load->view("dashboard", $data);
        /**/
    }
	
    public function crearSucursal()
    {
        //Se carga el modelo Usuario
        $this->load->model('sucursal');

        $nombre      = $this->input->post('nombre');
        $direccion   = $this->input->post('direccion');
        $telefono    = $this->input->post('telefono');

        $fila = $this->sucursal->agregarSucursal($nombre, $direccion, $telefono);

        //echo $fila;

        if ($fila = true) {
            echo "si";
            redirect(base_url("sucursales"), "");

            //$this->load->view("usuario");
        } else {
            echo "no";
            redirect(base_url("sucursales"), "");
            //$this->load->view("usuario");
        }
    }
}

 ?>