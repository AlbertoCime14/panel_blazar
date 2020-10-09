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

class C_configuracion extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('configuracion/V_conf_general');//carga la configuracion general
    $this->load->view('masterpage/V_footer');
  }
  public function dns_domains()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('configuracion/V_dns');
    $this->load->view('masterpage/V_footer');
  }
  public function conf_seguridad()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('configuracion/V_conf_seguridad');
    $this->load->view('masterpage/V_footer');
  }
  public function conf_lenguaje()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('configuracion/V_conf_lenguaje');
    $this->load->view('masterpage/V_footer');
  }
  public function app_connections()
  {
    
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('configuracion/V_conf_connections');
    $this->load->view('masterpage/V_footer');
  }


}


/* End of file C_clientes.php */
/* Location: ./application/controllers/C_clientes.php */