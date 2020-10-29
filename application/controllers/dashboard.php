<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Dashbroad extends CI_controller
 {
     public function __construct()
     {
         parent::__construct();
         
     }
      public function index()
      {
            $data['template'] ='template/index';
           $this->load->view('common/index');
          
          
      }
     
     
 }

