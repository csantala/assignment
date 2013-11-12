<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Comment extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function add_comment() {
			$this->load->view('components/ajax/comment_editor.php');
		}
	}