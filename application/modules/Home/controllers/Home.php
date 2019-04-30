<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller{

  function __construct() {
    $this->load->helper('url','form-helper');
  }

  public function index()
	{
		$data['title'] = 'GIS SICKAT';
		$this->template->load('MasterLayout','beranda', $data);
	}
  public function drag()
	{
		$data['title'] = 'SICKAT GIS | Import SHP File';
		$this->template->load('MasterLayout','dragdrop',$data);
	}
}
