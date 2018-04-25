<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/25/2018
 * Time: 8:48 PM
 */

class Simulasi extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    function index(){
        $this->load->view('home');
    }

    function peternakan(){
        $this->load->view('peternakan');
    }

    function pabrik(){
        $this->load->view('pabrik');
    }

    function distribusi(){
        $this->load->view('distribusi');
    }

    function finish(){
        $this->load->view('finish');
    }
}