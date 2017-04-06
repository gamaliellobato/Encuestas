<?php 

/**
* 
*/
class Usuarios extends CI_Controller
{

	public function index()
    {
        $this->load->library('session');
        $this->session->unset_userdata('login');
        $data = array('title' => 'Dashboard', 'app' => 'Likequest');
        $this->load->view("guest/head", $data);

        $data = array('mensaje' => 'estas en dashboard');

        $result = $this->db->get('sucursales');
        $data   = array('consulta' => $result);

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
        $password    = md5($this->input->post('password'));
        $id_rol      = $this->input->post('rol');
        $id_sucursal = $this->input->post('sucursal');

        $fila = $this->usuario->agregarUsuario($nombre, $paterno, $materno, $email, $password, $id_rol, $id_sucursal);

        //echo $fila;

        if ($fila = true) {
            echo "si";
            redirect(base_url("listaUsuarios"), "");

            //$this->load->view("usuario");
        } else {
            echo "no";
            redirect(base_url("usuario"), "");
            //$this->load->view("usuario");
        }
    }
}

 ?>