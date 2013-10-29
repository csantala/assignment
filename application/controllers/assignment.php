<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assignment extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {
		if($this->uri->segment(2)) {
			$assignment_hash = $this->uri->segment(2);
			$assignment = $this->Objectives_model->get_assignment($assignment_hash);

			// todo: proper hashing
			$synopsis_hash = time();

			$view_data = array(
				'objective' => $assignment->objective,
				'steps' => $assignment->steps,
				'assignment_hash' => $assignment_hash,
				'synopsis_url' => site_url() . $assignment_hash . '/' . $synopsis_hash,
				'assignment_url' => site_url() . 'assignment/' . $assignment_hash
			);
		 	$this->load->view('assignment_view', $view_data);
		} else {
	        $stats = $this->tracker_lib->track('assign');
	        $this->db->insert('tracker', $stats);

			// receive post from teacher, prepare a synopsis sheet for it, email link to student
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

				// redirect loads editor with objective from hash
				/*
				$view_data = array(
					'objective' => $objective,
					'steps' => $steps,
					'hash' => $hash,
					'synopsis_url' => site_url() . 'assignment/' . $assignment_hash . '/' . $synopsis_hash
				);
				*/
				redirect(site_url() . 'assignment/' . $assignment_hash);
				//$this->load->view('assignment_view', $view_data);
				//	ds($_POST,1);
			} else {
				// TODO: proper hashing
				$assignment_hash = time();

				$view_data = array(
					'assignment_hash' => $assignment_hash,
					'objective' => 'set objective',
					'date' => time()
				);
				$this->load->view('assign_view', $view_data);
			}
		}
	}
}