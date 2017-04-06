<?php 

/**
* 
*/
class Sucursal extends CI_Controller
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
        $this->load->view("guest/sucursal", $data);
        $this->load->view("guest/nav");
        $this->load->view("guest/footer");

		
		/*echo $fila->id_sucursales;
		echo $fila->nombre;
		echo $fila->direccion;*/
	}
}

 ?>