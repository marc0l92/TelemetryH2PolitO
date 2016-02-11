<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Databaseio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_databaseio');
	}
    
    public function insertAll(){
    	$this->insertTelemetria();
        $this->insertGps();
    }

	public function insertTelemetria(){
    $data = array();
    $data = $this->retriveData("voltage", $data, 0);
    $data = $this->retriveData("current", $data, 0);
    $data = $this->retriveData("speed", $data, 0);
    $data = $this->retriveData("minutes", $data, 0);
    $data = $this->retriveData("seconds100", $data, 0);
    $data = $this->retriveData("temperature1", $data, 0);
    $data = $this->retriveData("temperature2", $data, 0);
    $data = $this->retriveData("temperature3", $data, 0);
    $data = $this->retriveData("humidity1", $data, 0);
    $data = $this->retriveData("humidity2", $data, 0);
    $data = $this->retriveData("strategy", $data, 0);
    $data = $this->retriveData("electricMotor", $data, 0);
    $data = $this->retriveData("actuation", $data, 0);
    $data = $this->retriveData("emergency", $data, 0);
    $data = $this->retriveData("auxVoltage", $data, 0);
    $data = $this->retriveData("RPMEM", $data, 0);
    $data = $this->retriveData("RPMICE", $data, 0);
    $data = $this->retriveData("cruiseControl", $data, 0);
    $data = $this->retriveData("race_id", $data, 0);
    
    $this->model_databaseio->insertTelemetria($data);
    
    echo "<p><strong>Done</strong></p>";
	}
  
  public function insertGps(){
    $data = array();
    $data = $this->retriveData("lat_deg", $data);
    $data = $this->retriveData("lat_min", $data);
    $data = $this->retriveData("lat_sec", $data);
    $data = $this->retriveData("long_deg", $data);
    $data = $this->retriveData("long_min", $data);
    $data = $this->retriveData("long_sec", $data);
    $data = $this->retriveData("race_id", $data, 0);
    
    $this->model_databaseio->insertGps($data);
    
    echo "<p><strong>Done</strong></p>";
  }
  
  public function getTelemetria($setLetto = 1){
    $result = array();
    if($this->input->get('race_id') != ''){
	  $result = $this->model_databaseio->getTelemetria($this->input->get('race_id'), $setLetto);
    }else{
      $result = $this->model_databaseio->getTelemetria(-1, $setLetto);
    }
    echo json_encode($result);
  }
  
  public function getGps($setLetto = 1){
    $result = array();
    if($this->input->get('race_id') != ''){
	  $result = $this->model_databaseio->getGps($this->input->get('race_id'), $setLetto);
    }else{
      $result = $this->model_databaseio->getGps(-1, $setLetto);
    }
    echo json_encode($result);
  }

  private function retriveData($name, $my_array, $default_value = -1){
    if($this->input->get($name) != ''){
		$my_array[$name] = $this->input->get($name);
    }else{
      if($this->input->post($name) != ''){
          $my_array[$name] = $this->input->post($name);
      }else{
        echo "<p>Missing parameter: ".$name."</p>";
        if($default_value == -1){
            return;
        }else{
            $my_array[$name] = $default_value;
        }
      }
    }
    return $my_array;
  }
}




/* End of file databaseio.php */
/* Location: ./application/controllers/databaseio.php */