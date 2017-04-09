<?php 

/**
* 
*/
class Rol extends CI_Controller
{
	
	public function obtenerRoles()
    {   
        $consulta = $this->db->get('roles');
        $rol ="";
        $rol .= "<select class='form-control show-tick' data-live-search='true' title='Selecciona una sucursal' name='sucursal'>";
            foreach ($consulta->result() as $fila) {
                ;
                                            
                $rol .= "<option value='".$fila->id_roles."'>" .$fila->nombre_rol . "</option>";
            }
        $rol .= "</select>" ;
        
        return $rol;
    }
}
 ?>