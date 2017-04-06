<?php 

/**
* 
*/
class Usuario extends CI_Model
{
	
	public function obtenerUsuario($usuario = '')
	{
		$result = $this->db->query("SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' LIMIT 1");
		if ($result->num_rows() > 0) 
		{
            return $result->row();
        } 
        else 
        {
            return null;
        }
	}

	public function agregarUsuario($nombre, $paterno, $materno, $email, $password, $rol, $sucursal)
    {
        $status = 1;
        $data   = array(
            'nombres'     => $nombre,
            'paterno'     => $paterno,
            'materno'     => $materno,
            'email'       => $email,
            'usuario'     => "admin",
            'password'    => $password,
            'id_rol'      => $rol,
            'id_sucursal' => $sucursal,
            'status'      => $status,
        );

        //$this->db->query();

        $this->db->insert('usuarios', $data);
    }
}

 ?>