<?php 


/**
* 
*/
class Sucursales extends CI_Controller
{
	
	public function getSucursales()
	{
		return $this->db->get('sucursales');
	}


	public function getSucursalesById($id ='')
	{
		$result = $this->db->query("SELECT * FROM sucursales WHERE id_sucursales = '". $id."'" );
		return $result->row();
	}
}
 ?>