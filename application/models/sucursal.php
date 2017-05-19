<?php 

/**
* 
*/
class Sucursal extends CI_Model
{
    public function obtenerSucursalesById($id = '')
    {
        $result = $this->db->query("SELECT * FROM sucursales WHERE id_sucursales = '" . $id . "' LIMIT 1");
        if ($result->num_rows() > 0) 
        {
            return $result->row();
        } 
        else 
        {
            return null;
        }
    }

    public function obtenerSucursales()
    {   
        $consulta = $this->db->get('sucursales');
        $suc ="";
        $suc .= "<select required id='sucursal' class='form-control show-tick' data-live-search='true' title='Selecciona una sucursal' name='sucursal'>";
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

    public function listarSucursales()
    {
        $this->db->select('id_sucursales, nombre_suc, direccion, telefono');
        $this->db->from('sucursales');
        $this->db->where('status', 1);
        $result = $this->db->get();

        return $result;
    }

    public function actualizarSucursal($id_sucursales, $nombre_suc, $direccion, $telefono)
    {
        $status = 1;
        $data   = array(
            'id_sucursales' => $id_sucursales,
            'nombre_suc'   => $nombre_suc,
            'direccion'    => $direccion,
            'telefono'     => $telefono,
            'status'       => $status,
        );

        $sql = " UPDATE sucursales SET nombre_suc  = '".$data['nombre_suc'].
                                "', direccion   = '".$data['direccion'].
                                "', telefono    = '".$data['telefono'].
                                "' WHERE id_sucursales = '".$data['id_sucursales']."' ";

        $this->db->query($sql);
    }
}
 ?>