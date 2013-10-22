<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_for_admin();
	}

	public function index() {

		$stats = $this->tracker_lib->track('admin');
		$this->db->insert('tracker', $stats);

		redirect('/minis');
	}

	public function projects() {

		$stats = $this->tracker_lib->track('admin.all projects');
		$this->db->insert('tracker', $stats);

		$all_projects = $this->Project_model->projects('admin');
		$tasks = $this->Project_model->project_meta('admin');

		// index projects
		$projects_index = array();
		foreach ($all_projects as $project) {
			if (! in_array($project->project_id, $projects_index)) {
				$projects_index[] = $project->project_id;
			}
		}

		// index synopses into each project
		$projects = array();
		foreach ($projects_index as $project) {
			foreach($tasks as $task) {
				if ($task->project_id == $project) {
					$projects[$project][] =  $task;
				}
			}
		}
		// ds($projects,1);

		// index tasks of each project into synopsis
		$tasks_index = array();
		$projects_meta_raw = array();
		foreach ($projects as $tasks) {
			// create synopsis index
			foreach ($tasks as $task) {
				if (! in_array($task->session, $tasks_index)) {
					$projects_meta_raw[$task->project_id][$task->session][] = $task;
				}
			}
		}
		//ds($projects_meta_raw,1);

		// calculate number of tasks and elapsed time for each project & package into nice tidy array for view
		$projects_meta = array();

		foreach ($projects_meta_raw as $project => $synopses) {
			$project_elapsed_time = 0;
			$project_synopses = count($synopses);
			$project_tasks = 0;
			foreach ($synopses as $synopsis) {
				$synopsis_tasks = count($synopsis);
				$synopsis_elapsed_time = $synopsis[$synopsis_tasks - 1]->time - $synopsis[0]->time;
				$project_id = $synopsis[0]->project_id;
				$project_elapsed_time += $synopsis_elapsed_time;
				$project_synopses = $project_synopses;
				$project_tasks += $synopsis_tasks;
				$project_title = $synopsis[0]->title;
				$project_date = $synopsis[0]->date;
			}
			//ds($project_elapsed_time,1);
			//ds($$project_tasks);

			$projects_meta[] = array(
				'project_id' => $project_id,
				'title' => $project_title,
				'date' => $project_date,
				'synopses' => $project_synopses,
				'tasks' => $project_tasks,
				'elapsed_time' => $project_elapsed_time
			);

		}

		// tack on empty projects
		//ds($all_projects,1);
		//ds($projects_meta,1);
		$i = 0;
		foreach($all_projects as $project) {
			if (isset($projects_meta[$i]) && $projects_meta[$i]['project_id'] == $project->project_id) {
			} else {
				$projects_meta[$i] = array(
					'project_id' => $project->project_id,
					'title' => $project->title,
					'date' => $project->date,
					'synopses' => 0,
					'tasks' => 0,
					'elapsed_time' => 0
				);
			}
			$i++;

		}

		$view_data = array(
			'projects' => array_reverse($projects_meta),
			'user' => $this->session->userdata('user_name')
		);
		$this->load->view('admin/admin_projects_view', $view_data);
	}

	public function users() {
		$view_data = array(
			'all_users' => $this->User_model->users(),
			'user' => $this->session->userdata('user_name')
		);
		$this->load->view('admin/admin_users_view', $view_data);
	}
}