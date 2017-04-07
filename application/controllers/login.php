<?php 


/**
* 
*/
class Login extends CI_Controller
{
	
	public function index()
	{
		$usuario    = $this->input->post('usuario');
		$password   = md5($this->input->post('password'));

		//echo $email ."  ". md5($password);
		$this->load->model('usuario');
		
		$fila = $this->usuario->obtenerUsuario($usuario);

		if ($fila != null) 
		{
			if ($fila->password == $password) 
			{
				$data = array(
				'rol' => $fila->id_rol,
				'id'    => $fila->id_usuarios,
				'login' => true
				);

			$this->session->set_userdata($data);
			//echo "se inicio";	
			header("Location: http://localhost/likequest/dashboard");
			
			}
			else
			{
				header("Location: ". base_url());
			}
		}
		else
		{
			header("Location: ". base_url());
		}
	}


	public function logout()
    {
        $this->session->sess_destroy();
        header("Location:" . base_url());
    }
}
 ?>