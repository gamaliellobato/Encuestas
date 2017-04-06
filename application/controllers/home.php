<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	public function index()
	{
        $this->session->sess_destroy();
        $data = array('title' => 'Login', 'app' => 'Likequest');
        $this->load->view("guest/head", $data);
        $data = array('mensaje' => 'estas en dashboard');
        $this->load->model('sucursales');
        
        $result = $this->sucursales->getSucursales();
        $data   = array('consulta' => $result);
        $this->load->view("guest/content", $data);
        $this->load->view("guest/footer");
        
	}
}

?>