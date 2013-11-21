<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {

		// track this
		$stats = $this->tracker_lib->track('staging');
		$this->db->insert('tracker', $stats);

		die;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */