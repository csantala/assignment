<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Synopsis_model extends CI_Model {

	public function synopsis($project_id) {
		$this->db->where('project_id', $project_id);
	//	$this->db->where('user_id', $this->session->userdata('user_id'));
	//	$this->db->where('session', $session);
		$this->db->order_by("position", "asc");
		$data = $this->db->get('task');

		$data = $data->result();

		return $data;
	}

	public function new_synopsis($project_id, $session, $synopsis = null) {
		$data = array(
			'user_id' => $this->session->userdata('user_id'),
			'project_id' => $project_id,
			'objective' => isset($synopsis) ? $synopsis : $_POST['synopsis'],
			'session' => $session
		);
		$this->db->insert('synopsis', $data);
	}

	public function get_objective($project_id, $session, $user_id) {
		$data = array(
			'project_id' => $project_id,
			'session' => $session,
			'user_id' => $user_id
		);
		$this->db->where('project_id', $project_id);
		$this->db->where('session', $session);
		$this->db->where('user_id', $user_id);
		$data = $this->db->get('synopsis');
		$data = $data->result();

		return $data[0];
	}

	public function update_seconds() {
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('project_id', $_POST['project_id']);
		$this->db->where('session', $_POST['session']);
		$this->db->set('duration', 'duration+' . $_POST['seconds'], FALSE);
		$this->db->update('synopsis');
	}

}