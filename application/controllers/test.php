<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index() {
		$timezone = 'Aw_York';
		 date_default_timezone_set($timezone);
	}



}