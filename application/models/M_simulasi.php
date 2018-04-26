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

    function hasil($where, $table){
        return $this->db->get_where($table, $where);
    }

    function mulai($data, $table){
        $this->db->insert($table, $data);

    }
}