<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){

       $this->load->view('partials/header');
       $this->load->view('home');
       $this->load->view('partials/footer');
    }

    public function sapi(){
        $this->load->view('partials/header');
        $this->load->view('sapi');
        $this->load->view('partials/footer');
    }

     public function ikan(){
        $this->load->view('partials/header');
        $this->load->view('ikan');
        $this->load->view('partials/footer');
    }

}

