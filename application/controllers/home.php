<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

		$objective = '';

		$assignment_hash = $this->uri->segment(1);
		$synopsis_hash = $this->uri->segment(2);
        if ($assignment_hash) {
			$timezone = $_COOKIE['timezone'];

			$assignment = $this->Objectives_model->get_assignment($assignment_hash);

        	$rows = $this->Task_model->tasks($synopsis_hash);
			// create new synopses if !$rows
			if (empty($rows)) {
	       	    $rows[] = (object)array(
	                'project_id' => $synopsis_hash,
	                'position' => 1,
	                'session' => time(),
	                'time' => time(),
	                'task' => ''
	            );
			}

           $view_data = array(
                'objective' => $assignment->objective,
                'assignment_hash' => $assignment_hash,
                'steps' => $assignment->steps,
                'date' => time(), //$rows[0]->time,
                'project_id' => $synopsis_hash,
                'session' => $rows[0]->session,
                'rows' => $rows,
                'timezone' => $timezone
            );
            $this->load->view('editor_view', $view_data);
        } else {
        	// TODO: generate proper hash
            $assignment_hash = time();
			$view_data = array(
				'assignment_hash' => $assignment_hash,
				'objective' => $objective
			);
            $this->load->view('home_view', $view_data);
        }
    }

    public function edit_objective() {
        $this->load->view('/components/ajax/edit_objective', $_POST);
    }

    public function update_objective() {
        // update this objective in db
        $data = array(
            'project_id' => $_POST['project_id'],
            'objective' => $_POST['objective']
        );
        $this->Objectives_model->update_objective($data);
        $this->load->view('/components/ajax/updated_objective', $_POST);
    }
}