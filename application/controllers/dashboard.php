<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Dashboard extends CI_controller
 {
     public function __construct()
     {
         parent::__construct();
         
     }
      public function index()
      {
            
          $data ['template'] ='template/index';
          $this->load->view('layout/index');
          a
          
      }
     
     
 }

