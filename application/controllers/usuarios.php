<?php 

/**
* 
*/
class Usuarios extends CI_Controller
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

        $this->load->model('sucursal');
        $suc = $this->sucursal->obtenerSucursales();

        $this->load->model('rol');
        $rol = $this->rol->obtenerRoles();

        $data = array(
                'sucursal' => $suc,
                'rol' => $rol
                );

        $this->load->view("user/crearUsuario", $data);
        $this->load->view("guest/nav");

        $data = array('post' => 'Blog', 'descripcion' => 'Biendvenido al dashboard de codeiniter');
        $this->load->view("guest/footer");
        //$this->load->view("dashboard", $data);
        /**/
    }
	
	public function crearUsuario()
    {
        //Se carga el modelo Usuario
        $this->load->model('usuario');

        $nombre      = $this->input->post('nombre');
        $paterno     = $this->input->post('paterno');
        $materno     = $this->input->post('materno');
        $email       = $this->input->post('email');
        $usuario     = $this->input->post('usuario');
        $password    = md5($this->input->post('password'));
        $id_rol      = $this->input->post('rol');
        $id_sucursal = $this->input->post('sucursal');

        $fila = $this->usuario->agregarUsuario($nombre, $paterno, $materno, $email,$usuario, $password, $id_rol, $id_sucursal);

        //echo $fila;

        if ($fila = true) {
            echo "si";
            redirect(base_url("usuarios"), "");

            //$this->load->view("usuario");
        } else {
            echo "no";
            redirect(base_url("usuarios"), "");
            //$this->load->view("usuario");
        }
    }

    public function borrarUsuario()
    {
        //Se carga el modelo Usuario
        $this->load->model('usuario');

        $usuario = $this->input->post();
        $id = $usuario['id'];

        $sql = "UPDATE usuario SET status = 0 WHERE id_usuarios = '$id'";

        if ($this->db->query($sql)) 
        {
            echo $id;
        }
        else
        {
            echo false;
        }

        /*echo $id;*/
    }
}

 ?>