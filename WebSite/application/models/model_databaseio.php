<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_databaseio extends CI_Model {

    function __construct() {
        parent::__construct();
        //carica il database per poterlo usare in seguito
        $this->load->database();
    }

    function insertTelemetria($data){
        $this->db->insert('telemetria', $data);
    }
    
    function insertGps($data){
        $this->db->insert('gps', $data);
    }

    function getTelemetria($id_gara = -1, $setLetto = 1){
        // prelevo le informazioni non ancora lette
        $query_str = 'SELECT * FROM telemetria WHERE read_flag = 0';
        if($id_gara >= 0){
          $query_str .= ' AND race_id = '.$id_gara;
        }
        $query_str .= ' ORDER BY time_stamp';
        $query = $this->db->query($query_str);
        
        if($setLetto){
          // aggiorno il database togliendo il flag letto
          $data = array(
              'read_flag' => 1
              );
          if($id_gara >= 0){
            $this->db->where('race_id', $id_gara);
          }
          $this->db->update('telemetria', $data);
        }
        //converto l'oggetto in un array
        return $query->result_array();
    }
    
    function getGps($id_gara = -1, $setLetto = 1){
        // prelevo le informazioni non ancora lette
        $query_str = 'SELECT * FROM gps WHERE read_flag = 0';
        if($id_gara >= 0){
          $query_str = ' AND race_id = '.$id_gara;
        }
        $query_str .= ' ORDER BY time_stamp';
        $query = $this->db->query($query_str);
        
        if($setLetto){
          // aggiorno il database togliendo il flag letto
          $data = array(
              'read_flag' => 1
              );
          if($id_gara >= 0){
            $this->db->where('race_id', $id_gara);
          }
          $this->db->update('gps', $data);
        }
        
        //converto l'oggetto in un array
        return $query->result_array();
    }
}