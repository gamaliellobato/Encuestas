<?php 

/**
* 
*/
class ListaUsuarios extends CI_Controller
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
        $data = array('title' => 'Dashboard', 'app' => 'Likequest');
        $this->load->view("guest/head", $data);

        $data = array('mensaje' => 'estas en dashboard');

       /* $result = $this->db->get('sucursales');
        $data   = array('consulta' => $result);*/
        $this->load->model('usuario');

        $result = $this->usuario->listarUsuarios();
        $data = array('consulta' => $result);
        
        $this->load->view("user/listaUsuario", $data);
        $this->load->view("guest/nav");

        $data = array('post' => 'Blog', 'descripcion' => 'Bienvenido al dashboard de codeiniter');
        $this->load->view("guest/footer");
	}

    /*public function listaUsuario()
    {
        $this->load->model('usuario');


    }*/
}


 ?>