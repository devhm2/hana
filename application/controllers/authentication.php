<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Authentication extends CI_controller
 {
     public function __construct()
     {
         parent::__construct();
         
     }
      public function index()
      {
            $data['template'] ='template/auth';
            $this->load->view('layout/auth',isset($data)?$data :null);
         
          
          
      }
     
     
 }

