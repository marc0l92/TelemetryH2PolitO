<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model('model_home');
	}

	public function index(){
		$this->data['title'] = 'Home';
		$this->load->view('heading/view_head', $this->data);
		$this->load->view('pages/view_home');
		$this->load->view('heading/view_footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */