<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {
		if (! empty($_POST)) {
			$teacher_email = ''; // $_POST['teacher_email'];
			$objective = $_POST['objective'];
			$steps = $_POST['steps'];

			$dashboard_id = time();
			$assignment_id = time() + 100;

			$data = array(
				'dashboard_id' => $dashboard_id,
				'objective' => $objective,
				'steps' => $steps,
				'teacher_email' => '', //$teacher_email
				'assignment_id' => $assignment_id
			);

			// write objective and hash to db
			$this->Objectives_model->update_objective($data);

			$data += array(
				'assignment_url' => 'a url',
				'synopsis_url' => 's url'
			);

			redirect(site_url() . 'dashboard/' . $dashboard_id . '/' . $assignment_id);
		} else {
			$this->load->view('create_view');
		}
	}
}