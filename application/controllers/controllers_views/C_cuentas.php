<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller C_clientes
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class C_cuentas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('cuentas/V_cuentas_activas');//vista que carga las cuentas activas
    $this->load->view('masterpage/V_footer');
  }
  public function cuentas_suspendidas()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('cuentas/V_cuentas_suspendidas');
    $this->load->view('masterpage/V_footer');
  }
  public function cuentas_pendientes()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('cuentas/V_cuentas_pendientes');
    $this->load->view('masterpage/V_footer');
  }
  
  
}


/* End of file C_clientes.php */
/* Location: ./application/controllers/C_clientes.php */