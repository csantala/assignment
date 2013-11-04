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

			$assignment_hash = time();

			$data = array(
				'project_id' => $assignment_hash,
				'objective' => $objective,
				'steps' => $steps,
				'teacher_email' => '' //$teacher_email
			);

			// write objective and hash to db
			$this->Objectives_model->update_objective($data);
		} else {
			$this->load->view('create_view');
		}
	}
}