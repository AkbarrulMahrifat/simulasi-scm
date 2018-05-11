<?php
/**
 * Created by PhpStorm.
 * User: Akbarrul Mahrifat
 * Date: 4/26/2018
 * Time: 6:40 AM
 */

class M_simulasi extends CI_Model{

    function sapi(){
        return $this->db->get('jenis_sapi');
    }

    function makanan(){
        return $this->db->get('jenis_makanan');
    }

    function hasil($id){
    $this->db->select('*');
        $this->db->from('hasil');
        $this->db->join('jenis_sapi', 'jenis_sapi.id_sapi = hasil.id_sapi', 'inner');
        $this->db->join('jenis_makanan', 'jenis_makanan.id_makanan = hasil.id_makanan', 'inner');
        $this->db->where('id_hasil', $id);
        $data = $this->db->get()->row_array();
        return $data;
    }

    function ambilidhasil($id){
        $this->db->select('id_hasil');
        $this->db->where('id_hasil', $id);
        return $this->db->get('hasil');
    }


    function tampil($where, $table){
        return $this->db->get_where($table, $where);
    }

    function mulai($data, $table){
        $this->db->insert($table, $data);
    }

    function proseshitung($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function prosespabrik($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function prosesdistribusi($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}