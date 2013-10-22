<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Whatis extends CI_Controller {

		public function __construct () {
			parent::__construct();
		}

		public function index() {
			$stats = $this->tracker_lib->track('what is');
			$this->db->insert('tracker', $stats);
			$this->load->view('whatis_view');
		}
	}