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

class C_add_ons extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('paginas/V_add_ons');
    $this->load->view('masterpage/V_footer');


    
  }
  public function addon_detail()
  {
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('paginas/V_add_ons_detail');
    $this->load->view('masterpage/V_footer');


    
  }
  public function store()
  {
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('paginas/V_tienda');
    $this->load->view('masterpage/V_footer');


    
  }
  public function product_detail()
  {
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('paginas/V_product_detail');
    $this->load->view('masterpage/V_footer');


    
  }

  public function product_chekout()
  {
    $this->load->view('masterpage/V_head');
    $this->load->view('masterpage/V_nav_admin');
    $this->load->view('paginas/V_product_checkout');
    $this->load->view('masterpage/V_footer');    
  }




 
  
}


