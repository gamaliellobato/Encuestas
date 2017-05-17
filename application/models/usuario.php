<?php 

/**
* 
*/
class Usuario extends CI_Model
{
	public function obtenerUsuarioById($id = '')
    {
        $result = $this->db->query("SELECT * FROM usuario WHERE id_usuarios = '" . $id . "' LIMIT 1");
        if ($result->num_rows() > 0) 
        {
            return $result->row();
        } 
        else 
        {
            return null;
        }
    }

	public function obtenerUsuario($usuario = '')
	{
		$result = $this->db->query("SELECT * FROM usuario WHERE usuario = '" . $usuario . "' LIMIT 1");
		if ($result->num_rows() > 0) 
		{
            return $result->row();
        } 
        else 
        {
            return null;
        }
	}

	public function agregarUsuario($nombre, $paterno, $materno, $email, $usuario, $password, $rol, $sucursal)
    {
        $status = 1;
        $data   = array(
            'nombres'     => $nombre,
            'paterno'     => $paterno,
            'materno'     => $materno,
            'email'       => $email,
            'usuario'     => $usuario,
            'password'    => $password,
            'id_rol'      => $rol,
            'id_sucursal' => $sucursal,
            'status'      => $status,
        );

        //$this->db->query();

        $this->db->insert('usuario', $data);
    }

    public function listarUsuarios()
    {
        $this->db->select('u.id_usuarios,u.nombres, u.paterno, u.materno, u.email, s.nombre_suc, r.nombre_rol');
        $this->db->from('usuario u');
        $this->db->join('sucursales s', 'u.id_sucursal = s.id_sucursales');
        $this->db->join('roles r', 'u.id_rol = r.id_roles');
        $this->db->where('u.status = 1');

        $result = $this->db->get();

        return $result;
    }

    public function actualizarUsuario($id, $nombre, $paterno, $materno, $email, $usuario, $password, $rol, $sucursal)
    {
        $status = 1;
        $data   = array(
            'id'          => $id,
            'nombres'     => $nombre,
            'paterno'     => $paterno,
            'materno'     => $materno,
            'email'       => $email,
            'usuario'     => $usuario,
            'password'    => $password,
            'id_rol'      => $rol,
            'id_sucursal' => $sucursal,
            'status'      => $status,
        );

        //$this->db->query();

        /*$this->db->where('id_usuarios', $data);*/

        $sql = " UPDATE usuario SET nombres      = '".$data['nombres'].
                                "', paterno     = '".$data['paterno'].
                                "', materno     = '".$data['materno'].
                                "', email       = '".$data['email'].
                                "', usuario     = '".$data['usuario'].
                                "', password    = '".$data['password'].
                                "', id_rol      = '".$data['id_rol'].
                                "', id_sucursal = '".$data['id_sucursal'].
                                "' WHERE id_usuarios = '".$data['id']."' ";

        $this->db->query($sql);
    }
}

 ?>