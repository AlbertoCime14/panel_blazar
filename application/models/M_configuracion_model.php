<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_configuracion_model extends CI_Model {


  public function __construct()
  {
      $this->load->database();
      $this->load->library('session');
    


  }
                        

public function insertar_actualizar_servidor($data, $idusuario)
{      
  $query= $this->db->get_where('datos_conexion', array('idusuario' => $idusuario));
  $num_rows= $query->num_rows();
    if($num_rows>0)
    {     
      $this->load->database();
      $this->db->where('idusuario',$idusuario);
      $this->db->update('datos_conexion',$data);
      return 1;

    }else
    {
      $this->load->database();
        $this->db->insert('datos_conexion',$data);
       $this->db->insert_id();
  
      return 2;
	
	  }
  
  

                           
                        
}


public function mostrar_config($idusuario)
{        
  
  
          $this->load->database();
          $query= $this->db->get_where('datos_conexion', array('idusuario' => $idusuario));
          return $query->result_array();
                           
                        
}























                        
}/* End of file C_facturas.php */
    
    