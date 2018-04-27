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
        $data['hasil'] = $this->M_simulasi->hasil($where);
        $data['sapi'] = $this->M_simulasi->sapi()->result();
        $data['makanan'] = $this->M_simulasi->makanan()->result();
        $this->load->view('peternakan', $data);
    }

    function proseshitung($id){
        $id_hasil = $this->input->post('id_hasil');
        $id_sapi = $this->input->post('id_sapi');
        $id_makanan = $this->input->post('id_makanan');
        $bulan_laktasi = $this->input->post('bulan_laktasi');
        $jumlah_makanan = $this->input->post('jumlah_makanan');
        if ($id_sapi == 1 ){
            $hasil = '475';
        }
        elseif ($id_sapi == 3 ){
            $hasil = '347';
        }
        else {
            $hasil = '314';
        }
        $data = array(
            'id_sapi' => $id_sapi,
            'id_makanan' => $id_makanan,
            'bulan_laktasi' => $bulan_laktasi,
            'jumlah_makanan' => $jumlah_makanan,
            'hasil' => $hasil
        );
        $where = array(
            'id_hasil' => $id_hasil
        );
        $this->M_simulasi->proseshitung($where, $data, 'hasil');
        redirect('Simulasi/peternakan/'.$id);
    }

    function pabrik($id){
        $where = array('id_hasil' => $id);
        $data['hasil'] = $this->M_simulasi->hasil($where);
        $this->load->view('pabrik', $data);
    }

    function prosespabrik($id){
        $id_hasil = $this->input->post('id_hasil');
        $id_sapi = $this->input->post('id_sapi');
        $id_makanan = $this->input->post('id_makanan');
        $bulan_laktasi = $this->input->post('bulan_laktasi');
        $jumlah_makanan = $this->input->post('jumlah_makanan');
        $hasil = $this->input->post('hasil');
        $susu_jadi= $hasil/2;
        $data = array(
            'id_sapi' => $id_sapi,
            'id_makanan' => $id_makanan,
            'bulan_laktasi' => $bulan_laktasi,
            'jumlah_makanan' => $jumlah_makanan,
            'hasil' => $hasil,
            'susu_jadi' => $susu_jadi
        );
        $where = array(
            'id_hasil' => $id_hasil
        );
        $this->M_simulasi->prosespabrik($where, $data, 'hasil');
        redirect('Simulasi/pabrik/'.$id);
    }

    function distribusi($id){
        $where = array('id_hasil' => $id);
        $data['hasil'] = $this->M_simulasi->hasil($where);
        $this->load->view('distribusi', $data);
    }

    function prosesdistribusi($id){
        $id_hasil = $this->input->post('id_hasil');
        $id_sapi = $this->input->post('id_sapi');
        $id_makanan = $this->input->post('id_makanan');
        $bulan_laktasi = $this->input->post('bulan_laktasi');
        $jumlah_makanan = $this->input->post('jumlah_makanan');
        $hasil = $this->input->post('hasil');
        $susu_jadi = $this->input->post('susu_jadi');
        $toko1 = $susu_jadi/3;
        $toko2 = $susu_jadi/3;
        $toko3 = $susu_jadi/3;
        $pendapatan = $susu_jadi*13000;

        $data = array(
            'id_sapi' => $id_sapi,
            'id_makanan' => $id_makanan,
            'bulan_laktasi' => $bulan_laktasi,
            'jumlah_makanan' => $jumlah_makanan,
            'hasil' => $hasil,
            'susu_jadi' => $susu_jadi,
            'toko1' => $toko1,
            'toko2' => $toko2,
            'toko3' => $toko3,
            'pendapatan' => $pendapatan
        );
        $where = array(
            'id_hasil' => $id_hasil
        );
        $this->M_simulasi->prosesdistribusi($where, $data, 'hasil');
        redirect('Simulasi/distribusi/'.$id);
    }

    function finish($id){
        $where = array('id_hasil' => $id);
        $data['hasil'] = $this->M_simulasi->hasil($where);
        $this->load->view('finish', $data);
    }
}