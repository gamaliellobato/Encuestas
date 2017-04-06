<?php 

/**
* 
*/
class Dashboard extends CI_Controller
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
		$data = array('title' => 'Dashboard' , 'app' => 'Likequest');
        $this->load->view("guest/head", $data);
        $data = array('mensaje' => 'Estas en Perfil', 'descripcion' => 'En esta sección podrás administrar tu perfil.');
        //$this->load->helper('bootstrap');
        $this->load->view("dashboard/content", $data);
        $this->load->view("guest/nav");
        $this->load->view("guest/footer");
	}
}

 ?>