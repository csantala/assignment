<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Comment extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function add_comment() {
			$this->load->view('components/ajax/comment_editor.php');
		}

		public function update_comment() {
			$task_id = $_POST['task_id'];
			$comment = $_POST['comment'];
			// save comment
			$this->Comment_model->update_comment();

			$view_data = array(
				'task_id' => $task_id,
				'comment' => $comment
			);
			$this->load->view('components/ajax/updated_comment.php', $view_data);
		}
	}