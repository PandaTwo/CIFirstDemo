<?php
/**
 * Created by PhpStorm.
 * User: Dev01
 * Date: 15-3-24
 * Time: 上午9:42
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index(){

        $this->load->view('HelloWorld');

    }

    public function senond(){

        $this->load->view('senondpage.html');
    }

}