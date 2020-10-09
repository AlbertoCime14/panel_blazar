<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_usuarios_model extends CI_Model
{


  public function __construct()
  {
    $this->load->database();
    $this->load->library('session');
  }




  public function insertar_usuario1($data)
  {
    $this->load->database();
    $this->db->insert('usuarios', $data);
    return $this->db->insert_id();
  }

  public function get_pais()
  {
    $query = $this->db->get('pais');
    return $query->result_array();;
  }





  public function get_estado($idpais)
  {
    $query = $this->db->get_where('estado', array('idpais' => $idpais));
    return $query->result_array();;
  }
  public function get_estado_user($idestado)
  {
    $query = $this->db->get_where('estado', array('idestado' => $idestado));
    return $query->result_array();;
  }


  public function get_perfil()
  {
    $query = $this->db->get('perfiles');
    return $query->result_array();;
  }


  public function insertar_usuario2($data)
  { //INSERTAR EN LA BASE DE DATOS

    //PRIMERO VALIDO SI EXISTE

    $this->load->database();
    $this->db->insert('cuenta', $data);
    return $this->db->insert_id();
  }

  public function get_usuarios()
  {
    $query = $this->db->get('usuarios');
    return $query->result_array();;
  }





  public function mostrarusuarios()
  {
    $this->db->select('usuarios.idusuario,cuenta.idperfil, usuarios.idestado, estado.idestado,estado.nombre as estado,cuenta.usuario,cuenta.pass,usuarios.nombre, usuarios.apellidopat, usuarios.apellidomat, usuarios.RFC,usuarios.colonia,usuarios.telefono,usuarios.direccion, usuarios.cp, usuarios.razonsocial,perfiles.nombre as perfil');
    // $this->db->select('cuenta.usuario,cuenta.correo,cuenta.password,personal.user_photo, personal.idpersonal, personal.nombre ,personal.apellidopat, personal.direccion,personal.telefono, perfil.nombre as perfil');
    $this->db->from('cuenta');
    $this->db->join('usuarios', 'usuarios.idusuario = cuenta.idusuario');
    $this->db->join('perfiles', 'perfiles.idperfil= cuenta.idperfil');
    $this->db->join('estado', 'estado.idestado= usuarios.idestado');



    $resultado = $this->db->get();
    return $resultado->result_array();;
  }
  public function getDataUser($id_user)
  {
    $this->db->select('*');
    $this->db->from('cuenta');
    $this->db->join('usuarios', 'usuarios.idusuario=cuenta.idusuario');
    $this->db->where('cuenta.idusuario', $id_user);

    $query = $this->db->get();

    return $query->result_array();
  }
  public function actualizar_perfil($id_user,$data)
  {
    $this->db->where('idusuario', $id_user);
		return $this->db->update('usuarios', $data);
		
  }
  public function actualizar_cuenta($id_user,$data)
  {
    $this->db->where('idusuario', $id_user);
		return $this->db->update('cuenta', $data);
		
  }
  public function upload_photo($id_user,$data)
  {
    $this->db->where('idusuario', $id_user);
		return $this->db->update('cuenta', $data);
		
  }
}/* End of file C_facturas.php */
