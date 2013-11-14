<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function update_comment() {

		$query = $this->db->get_where('comments', array(
			'task_id' => $_POST['task_id']
		));
		$data = array(
			'task_id' => $_POST['task_id'],
			'user_id' => $this->session->userdata('user_id'),
//			'branch' => $_POST['session'],
			'comment' => $_POST['comment'],
			'date' => time()
		);
		// create a new branch if present, otherwise create a new row if unique ($task_id)
		$rows = $query->num_rows();
		if ($rows > 0) {
			$data['branch'] = $rows;
			$this->db->insert('comments', $data);
		} else {
			$this->db->insert('comments', $data);
		}
	}
}