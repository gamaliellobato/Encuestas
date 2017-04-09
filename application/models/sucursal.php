<?php 

/**
* 
*/
class Sucursal extends CI_Model
{
    public function obtenerSucursales()
    {   
        $consulta = $this->db->get('sucursales');
        $suc ="";
        $suc .= "<select class='form-control show-tick' data-live-search='true' title='Selecciona una sucursal' name='sucursal'>";
            foreach ($consulta->result() as $fila) {
                ;
                                            
                $suc .= "<option value='".$fila->id_sucursales."'>" .$fila->nombre_suc . "</option>";
            }
        $suc .= "</select>" ;                               
                                        
        return $suc;
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