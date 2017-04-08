<?php 

/**
* 
*/
class Sucursal extends CI_Model
{
    public function obtenerSucursales()
    {
        
    }
	
	public function agregarSucursal($nombre, $direccion, $telefono)
    {
        $status = 1;
        $data   = array(
            'nombre'       => $nombre,
            'direccion'    => $direccion,
            'telefono'     => $telefono,
            'status'       => $status
        );

        //$this->db->query();

        $this->db->insert('sucursales', $data);
    }
}
 ?>