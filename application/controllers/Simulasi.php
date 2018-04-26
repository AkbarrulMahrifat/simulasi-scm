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
            $this->load->model('M_simulasi');
    }

    function index(){
        $this->load->view('home');
    }

    function mulai(){
        $data = array(
            'id_hasil' => '',
            'id_sapi' => null,
            'id_makanan' => null,
            'bulan_laktasi' => null,
            'jumlah_makanan' => null,
            'hasil' => null
        );
        $this->M_simulasi->mulai($data, 'hasil');
        $id = $this->db->insert_id();
        redirect('Simulasi/peternakan/'.$id);
    }

    function peternakan($id){
        $where = array('id_hasil' => $id);
        $data['hasil'] = $this->M_simulasi->hasil($where, 'hasil')->row()->id_hasil;
        $data['sapi'] = $this->M_simulasi->sapi()->result();
        $data['makanan'] = $this->M_simulasi->makanan()->result();
        $this->load->view('peternakan', $data);
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