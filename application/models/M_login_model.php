<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_login_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    $this->load->database();
    $this->load->library('session');
    // 
  }

  
  public function login ($username, $password)
  {      
      $this->db->select('usuarios.idusuario,datos_conexion.servidor,datos_conexion.apikey,datos_conexion.password,datos_conexion.crt,datos_conexion.archivokey,cuenta.idperfil,cuenta.usuario,cuenta.pass,usuarios.nombre, usuarios.apellidopat, usuarios.apellidomat, usuarios.RFC,usuarios.direccion, usuarios.cp, usuarios.razonsocial,perfiles.nombre as perfil');		  
     // $this->db->select('cuenta.usuario,cuenta.correo,cuenta.password,personal.user_photo, personal.idpersonal, personal.nombre ,personal.apellidopat, personal.direccion,personal.telefono, perfil.nombre as perfil');
      $this->db->from('cuenta');
      $this->db->join('usuarios', 'usuarios.idusuario=usuarios.idusuario');
      $this->db->join('perfiles', 'perfiles.idperfil= cuenta.idperfil');
      $this->db->join('datos_conexion', 'datos_conexion.idusuario= usuarios.idusuario');
      $this->db->where('cuenta.usuario', $username);
      $this->db->where('cuenta.pass',$password);
      $resultado = $this->db->get();
      //$this->db->where('usuario', $username);
     // $this->db->where('password',$password);
     // $q = $this->db->get('cuenta');
      //if($q->num_rows()>0)
      if($resultado->num_rows()>0)
      {
         $r= $resultado->row();
         $s_usuario=array(
             's_idusuario'=> $r->idusuario,
             's_nombreapellido'=> $r->nombre."  ,  ".$r->apellidopat,
             's_nombres'=> $r->nombre,
             's_apellidomat'=> $r->apellidomat,
             's_usuario'=> $r->usuario,
              's_rol'=> $r->perfil,
             ///'s_password'=> $r->password,
             //'s_userphoto'=> $r->user_photo,
             's_direccion'=> $r->direccion,
             //'s_telefono'=> $r->telefono

         );
        
         //tambien puede ser así
     
         $this->session->set_userdata($s_usuario);
         //$this->session->userdata('s_idpersonal',$r->idpersonal);
         //$this->session->userdata('s_usuario'=> $r->usuario.",".$r->perfil);*/
          return true;
      }  
      else{
          return false;
      }


  }
 
  // ------------------------------------------------------------------------

}

/* End of file M_login_model_model.php */
/* Location: ./application/models/M_login_model_model.php */