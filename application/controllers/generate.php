<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function tag_student() {
		$hash = $_POST['hash'];
		$name = $_POST['name'];
		// error_log($hash);
		$this->Report_model->name_report($hash, $name);
	}

    public function generate_report($project_id, $asshash) {

		$student_name = $this->Synopsis_model->get_student($project_id);

        // generate elapsed time
	     $synopsis = $this->Synopsis_model->synopsis($project_id);

		 if (! empty($synopsis)) {
		 	$start = $synopsis[0]->time;
			$end = $synopsis[count($synopsis) - 1]->time;
			$elapsed_time = elapsed_time($end - $start);
		 } else {
		 	$elapsed_time = 0;
		 }

		$timezone = $_COOKIE['timezone'];
        // create report for project_id
        $data = compact('project_id', 'elapsed_time', 'project_id', 'timezone', 'asshash', 'student_name');
        $this->Report_model->create_report($data);

		$assignment = $this->Objectives_model->get_assignment($asshash);

        // redirect to hashed view
        redirect('/generate/submitted/' . $project_id . '/' . $asshash);
    }

	public function submitted($synopsis_id, $assignment_hash) {

		$assignment = $this->Objectives_model->get_assignment($assignment_hash);

		$report_url = site_url() . 'report/' . $synopsis_id;
		$status = 'submitted';
		$this->Synopsis_model->update_synopsis_for_report(compact('status', 'report_url', 'synopsis_id'));

		$view_data = array(
			'report_url' => $report_url
		);

		$this->load->view('submitted_view', $view_data);
	}

	public function email_report($project_id, $assignment) {
		//$cc = 'this@that.com'; // TODO: add to config or an admin view
		//$bcc = 'csantala@gmail.com'; // same

		$synopsis_subject = 'syn subj'; // ..

		// get report data for this hash (again.)
		$report = $this->Report_model->retrieve_report($project_id);

		$hash = $report->hash;
		$synopsis = $this->Synopsis_model->synopsis($report->project_id);
		$objective = $assignment->objective;
		$email_body = $this->build_report(compact('report', 'synopsis', 'hash', 'project_id', 'objective', 'assignment'));

		$this->load->library('email');
		$config['mailtype'] = 'html';
		$this->email->initialize($config);

		$this->email->from('Synopsis', 'Synopsis Report');
		$this->email->to($assignment->teacher_email);

		//$this->email->cc($cc);
		//$this->email->bcc($bcc);

		$this->email->subject($objective);
		$this->email->message($email_body);

		$this->email->send();
	}

	public function build_report($data) {
		extract($data);
        $data = array(
        	'report' => $report,
            'synopsis' => $synopsis,
            'objective' => $objective,
            'project_id' => $synopsis[0]->project_id,
            'elapsed_time' => $report->elapsed_time,
            'project_title' => $report->project_title,
            'date' => date('F j, Y', $synopsis[0]->time),
            'hash' => $hash,
            'assignment' => $assignment,
            'timezone' => $report->timezone
        );
		return $this->load->view('report_email_view', $data, TRUE);
	}
}