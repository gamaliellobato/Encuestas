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
            echo "no";
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
	
	public function sucursalId($id = '')
	{
		$this->load->model('sucursales');
		$fila = $this->sucursales->getSucursalesById($id);

		$data = array('title' => 'Dashboard', 'app' => 'Likequest');
        $this->load->view("guest/head", $data);
        $data = array('mensaje' => 'estas en dashboard');
        $this->load->model('sucursales');
        
        $result = $this->sucursales->getSucursales();
        $data   = array('consulta' => $result);
        $this->load->view("sucursal/crearSucursal", $data);
        $this->load->view("guest/nav");
        $this->load->view("guest/footer");

	}
}

 ?>