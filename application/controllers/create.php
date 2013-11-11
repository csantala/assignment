<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {
		if (! empty($_POST)) {
			$teacher_email = $_POST['teacher_email'];
			$objective = $_POST['objective'];
			$steps = $_POST['steps'];

			$dashboard_id = hashids_encrypt(time());
			$assignment_id = hashids_encrypt(time() + rand(0,10000));

			$data = array(
				'dashboard_id' => $dashboard_id,
				'objective' => $objective,
				'steps' => $steps,
				'teacher_email' => $teacher_email,
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

	public function begin() {
		$data = array(
			'student_name' => $_POST['student_name'],
			'assignment_id' => $_POST['assignment_id'],
			'synopsis_id' => $_POST['synopsis_id'],
			'timezone' => $timezone = $_COOKIE['timezone']
		);
		$this->Synopsis_model->label_synopsis($data);
		redirect($_POST['synopsis_url']);
	}
}