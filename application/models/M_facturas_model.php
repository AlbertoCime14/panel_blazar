<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_facturas_model extends CI_Model {


  public function __construct()
  {
      $this->load->database();
      $this->load->library('session');
    


  }
                        
public function cargardatoscliente(){
   
        $api_url ="https://portal.yungo.mx/api/v1.0/clients";
        $client= curl_init($api_url);
        curl_setopt($client, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Auth-App-Key: fP5ZTkn2QZ27bNXz424gbKfdfKZs+MvLWE0EAjCOoqu6J47Y88MIlfR+y1iQ6PrY'));
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
    
        $result= json_decode($response);
        return($result);
        
       
     
                                
}


public function consultaregistro($datos, $identificador, $datospago)
{//INSERTAR EN LA BASE DE DATOS

      //PRIMERO VALIDO SI EXISTE
   
       $query2 = $this->db->get_where('pagocliente', array('iducrm' => $identificador));
       $query = $this->db->get_where('datosclientes', array('iducrm' => $identificador));
      if($query->num_rows()>0 || $query2->num_rows()>0 )
      {
   
      }
    else{
      //GENERO EL ARRAY CON LOS DATOS QUE SE INSERTARAN
      $datos = array(
        'razonsocial' => $datos['razonsocial'],
        'iducrm' => $datos['iducrm'],
        'codigopostal' => $datos['codigopostal'],
        'numregcompania'=>  $datos['numregcompania'],
        'direccion'=>$datos['direccion'] ,
        'colonia'=>$datos['colonia'] ,
        'nombrecontac'=> $datos['nombrecontac'],
        'contacapellido'=> $datos['contacapellido'],
        'email'=> $datos['email'],
        'phone'=> $datos['phone'],

      );
      $datospago = array(
        'codmp' => $datospago['codmp'],
        'codfp' => $datospago['codfp'],
        'codcfdi' => $datospago['codcfdi'],
        'iducrm'=>  $datospago['iducrm'],
    

      );
     $this->db->insert('datosclientes', $datos);
     $this->db->insert('pagocliente', $datospago);
    }
                        
                            
                        
}

public function facturascliente($iducrm){

  $api_url ="https://portal.yungo.mx/api/v1.0/clients/".$iducrm."/invoices";
  $client= curl_init($api_url);
  curl_setopt($client, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Auth-App-Key: fP5ZTkn2QZ27bNXz424gbKfdfKZs+MvLWE0EAjCOoqu6J47Y88MIlfR+y1iQ6PrY'));
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  curl_close($client);

  $result= json_decode($response,true);
 return($result);
  
 

                          
}

public function facturasnopagadas(){

  $api_url ="https://portal.yungo.mx/api/v1.0/invoices";
  $client= curl_init($api_url);
  curl_setopt($client, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Auth-App-Key: fP5ZTkn2QZ27bNXz424gbKfdfKZs+MvLWE0EAjCOoqu6J47Y88MIlfR+y1iQ6PrY'));
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  curl_close($client);

  $result= json_decode($response,true);
 return($result);
  
 

                          
}


public function insertarfacturacliente($datos, $number)
{//INSERTAR EN LA BASE DE DATOS

      //PRIMERO VALIDO SI EXISTE
   
        $query = $this->db->get_where('facturascliente', array('number' => $number));
        if($query->num_rows()>0) 
        {
          
        }
    else{
     
      $datos = array(
        'number' =>$datos['number'],
        'createdate' => $datos['createdate'],
        'emailsendate' =>$datos['emailsendate'],
        'maturitydays' => $datos['maturitydays'],
        'notes'=> $datos['notes'],
        'adminnotes'=>$datos['adminnotes'],
        'templateid'=>$datos['templateid'],
        'perforidfac'=> $datos['perforidfac'],
        'nombreorganizacion'=> $datos['nombreorganizacion'],
        'registroorganizacion'=> $datos['registroorganizacion'],
        'organzaciontaxid'=>$datos['organzaciontaxid'],
        'perforidfac'=>$datos['perforidfac'],
        'nombreorganizacion'=> $datos['nombreorganizacion'],
        'registroorganizacion'=> $datos['registroorganizacion'],
        'organzaciontaxid'=> $datos['organzaciontaxid'],
        'direccionorganizacion' =>$datos['direccionorganizacion'],
        'coloniaorganizacion' => $datos['coloniaorganizacion'],
        'ciudadorganizacion' =>$datos['ciudadorganizacion'],
        'cporganizacion'=>$datos['cporganizacion'],
        'orgbankaccountname'=> $datos['orgbankaccountname'],
        'orgbankaccountf1'=> $datos['orgbankaccountf1'],
        'orgbankaccountf2'=> $datos['orgbankaccountf2'],
        'nombrecliente'=> $datos['nombrecliente'],
        'apellidocliente'=> $datos['apellidocliente'],
        'companiacliente'=> $datos['companiacliente'],
        'nomorgcliente'=> $datos['nomorgcliente'],
        'direccioncliente'=> $datos['direccioncliente'],
        'coloniacliente'=> $datos['coloniacliente'],
        'ciudadcliente'=> $datos['ciudadcliente'],
        'cpcliente'=> $datos['cpcliente'],
        'clienteid'=> $datos['clienteid'],
        'duedate'=> $datos['duedate'],
        'subtotal'=> $datos['subtotal'],
        'discountlabel'=> $datos['discountlabel'],
        'total'=> $datos['total'],
        'amounpaid'=>$datos['amounpaid'],
        'concurrencycode'=> $datos['concurrencycode'],
		  'status'=> $datos['status'],

      );
		
       $sql =$this->db->insert('facturascliente', $datos);
	    	return $sql;
    
    }
                        
                            
                        
}



public function mostrarclientes(){
  $query= $this->db->get("datosclientes");
  $query2= $this->db->get("pagocliente");
  $num_rows= $query->num_rows();
  $num_rows2= $query2->num_rows();
    if($num_rows>0 || $num_rows2>0 )
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}
public function mostrarpagocliente($iducrm){
 
  $query = $this->db->get_where('pagocliente', array('iducrm' => $iducrm));
  $num_rows= $query->num_rows();
 
    if($num_rows>0)
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}
	
	public function mostrarfacturascliente($query){
 // $query= $this->db->get_where('facturascliente', array('clienteid' => $iducrm));


  $this->db->select("*");
  $this->db->from("facturascliente");
  $this->db->like('number', $query);
   $this->db->or_like('createdate', $query);
   $this->db->or_like('emailsendate', $query);
   $this->db->or_like('maturitydays', $query);
   $this->db->or_like('clienteid', $query);
   $this->db->or_like('subtotal', $query);
   $this->db->or_like('nombreorganizacion', $query);
   $this->db->or_like('registroorganizacion', $query);
   $this->db->or_like('direccionorganizacion', $query);
   $this->db->or_like('coloniaorganizacion', $query); 
   $this->db->or_like('ciudadorganizacion', $query);
   $this->db->or_like('registroorganizacion', $query);
   $this->db->or_like('direccionorganizacion', $query);
   $this->db->or_like('cporganizacion', $query);


   $this->db->or_like('nombrecliente', $query);
   $this->db->or_like('apellidocliente', $query);
   $this->db->or_like('companiacliente', $query);
   $this->db->or_like('direccioncliente', $query);
   $this->db->or_like('coloniacliente', $query); 
   $this->db->or_like('ciudadcliente', $query);
   $this->db->or_like('clienteid', $query);
   $this->db->or_like('subtotal', $query);
   $this->db->or_like('concurrencycode', $query);
   $res= $this->db->get();









    $num_rows= $res->num_rows();
    if($num_rows>0)
    {
      return $res->result_array();





    }
	  else
	  {
	  	return $res->result_array();
	
	
   	}
 
    
     


  
}
	
	
	public function clicfactura_cliente($iducrm){
  $query= $this->db->get_where('datosclientes', array('iducrm' => $iducrm));
  $num_rows= $query->num_rows();
    if($num_rows>0)
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}

public function pagocliente($iducrm){
  $query= $this->db->get_where('pagocliente', array('iducrm' => $iducrm));
  $num_rows= $query->num_rows();
    if($num_rows>0)
    {
      return $query->result_array();





    }else
    	{
		return $query->result_array();
	
	
	  }
 
    
     


  
}
	
public function listafp(){
  $query= $this->db->get("forma_pago");

  $num_rows= $query->num_rows();
  
    if($num_rows>0 )
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}
	
	
public function listamp(){
  $query= $this->db->get("metodo_pago");

  $num_rows= $query->num_rows();
  
    if($num_rows>0 )
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}
public function listacfdi(){
  $query= $this->db->get("usocfdi");

  $num_rows= $query->num_rows();
  
    if($num_rows>0 )
    {
      return $query->result_array();





    }
	else
	{
		return $query->result_array();
	
	
	}
 
    
     


  
}




public function actualizardatoscliente($datos, $iducrm, $datospago){
  $this->db->where('iducrm',$iducrm);
  $this->db->update('datosclientes',$datos);


  $this->db->where('iducrm',$iducrm);
  $this->db->update('pagocliente',$datospago);
  
    
}
  

function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("facturascliente");
  if($query != '')
  {
    $this->db->like('facturascliente', $query);
   $this->db->like('number', $query);
   $this->db->or_like('createdate', $query);
   $this->db->or_like('emailsendate', $query);
   $this->db->or_like('maturitydays', $query);
   $this->db->or_like('clienteid', $query);
   $this->db->like('subtotal', $query);
   $this->db->or_like('nombreorganizacion', $query);
   $this->db->or_like('registroorganizacion', $query);
   $this->db->or_like('direccionorganizacion', $query);
   $this->db->or_like('coloniaorganizacion', $query); 
   $this->db->or_like('ciudadorganizacion', $query);
   $this->db->or_like('registroorganizacion', $query);
   $this->db->or_like('direccionorganizacion', $query);
   $this->db->or_like('cporganizacion', $query);


   $this->db->like('nombrecliente', $query);
   $this->db->or_like('apellidocliente', $query);
   $this->db->or_like('companiacliente', $query);
   $this->db->or_like('direccioncliente', $query);
   $this->db->or_like('coloniacliente', $query); 
   $this->db->or_like('ciudadcliente', $query);
   $this->db->or_like('clienteid', $query);
   $this->db->or_like('subtotal', $query);
   $this->db->or_like('concurrencycode', $query);
   
   $this->db->order_by('clienteid', 'DESC');
   $res=$this->db->get();

  }
  else{

    $this->db->order_by('clienteid', 'DESC');

    $res=$this->db->get();


  }
 

 
  return $res();

 }
	



  













                        
}/* End of file C_facturas.php */
    
                        