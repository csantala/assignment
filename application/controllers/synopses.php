<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopses extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_user();
	}

	public function index() {

		// track this
		$stats = $this->tracker_lib->track('synopses');
		$this->db->insert('tracker', $stats);

		$this->load->view('synopses');
	}

	public function delete($session, $project_id) {
		$this->Synopses_model->delete($session, $project_id);
		redirect('/synopses/project/'.$project_id);
	}

	public function project($project_id) {
		$stats = $this->tracker_lib->track('project synopses');
		$this->db->insert('tracker', $stats);

		// get project data for this project
		$project = $this->Project_model->project($project_id);

		// get objectives for this project
		$objectives = $this->Objectives_model->get_objectives($project_id);

		// get synopses for this project
		$rows = $this->Synopses_model->synopses($project_id);

		// ds($rows,1);
		// group synopsis into synopses
		// [date] [elapsed time] [synopsis title (objectives)]

		// build array of all session values
		// build synopsis indexed by session values
		// calculate elapsed time of synopses and set date to first row in synopsis
		$synopses = array();
		$synopses_index = array();
		$synopsis = array();
		foreach ($rows as $row) {
			if (! in_array($row->session, $synopses_index)) {
				$synopses_index[] = $row->session;
			}
		}
		foreach ($synopses_index as $synopsis) {
			foreach($rows as $row) {
				if ($row->session == $synopsis) {
					$synopses[$synopsis][] =  $row;
				}
			}
		}
		timezoner();
		// calculate elapsed time and # of tasks for each synopses
		$project->total_seconds = 0;
		$project->total_tasks = 0;
		foreach ($synopses as $synopsis) {
			$position = count($synopsis) - 1;
			//ds($position);
			$seconds = $synopsis[$position]->time - $synopsis[0]->session;
			$start = date(" g:i a", $synopsis[0]->session); $end = date("g:i a", $synopsis[$position]->time);
			$synopses[$synopsis[0]->session]['tasks'] = $position + 1;
			$synopses[$synopsis[0]->session]['start'] = $start;
			$synopses[$synopsis[0]->session]['end'] = $end;
			$synopses[$synopsis[0]->session]['seconds'] = $synopsis[$position]->time - $synopsis[0]->session;
			$project->total_seconds += $seconds;
			$project->total_tasks += $position + 1;
		}
		$project->start = $project->date;
		if (! empty($synopsis)) { $project->end = $synopsis[$position]->time; } else { $project->end = time(); }

		$view_data = array(
			'user' => $this->session->userdata('username'),
			'project_id' => $project_id,
			'objectives' => $objectives,
			'synopses' => array_reverse($synopses),
			'project' => $project
		);

		$this->load->view('project_view', $view_data);
	}
}