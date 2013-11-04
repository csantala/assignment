<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function index() {
    	date_default_timezone_set('America/Vancouver');
        $hash = $this->uri->segment(2);
        if ($hash) {
            // retreive report by hash
            $report = $this->Report_model->retrieve_report($hash);
            // retreive synopsis for this report
            $synopsis = $this->Synopsis_model->synopsis($report->project_id);
		//	$objective = $this->Objectives_model->get_objective($report->project_id);
			$assignment = $this->Objectives_model->get_assignment($report->assignment_hash);

		//	ds($report,1);

			if (empty($synopsis)) {die('cmon, at least do something before reporting it.'); }

            $report_url = site_url() . 'report/' . $hash;
            $report_url_length = strlen($report_url);
            // create view
            $data = array(
            	'student_name' => $report->student_name,
                'synopsis' => $synopsis,
                'objective' => $assignment->objective,
                'steps' => $assignment->steps,
                'project_id' => $synopsis[0]->project_id,
                'elapsed_time' => $report->elapsed_time,
                'project_title' => $report->project_title,
                'date' => date('F j, Y', $synopsis[0]->time),
                'hash' => $hash,
                'report_url' => $report_url,
                'report_url_length' => $report_url_length,
                'timezone' => 'America/Vancouver'
            );
           $this->load->view('report_view', $data);
        }
    }

	public function tag_student() {
		$hash = $_POST['hash'];
		$name = $_POST['name'];
		// error_log($hash);
		$this->Report_model->name_report($hash, $name);
	}

    public function generate_report($project_id, $asshash) {

        // generate elapsed time
         $synopsis = $this->Synopsis_model->synopsis($project_id);
		 if (! empty($synopsis)) {
		 	$start = $synopsis[0]->time;
			$end = $synopsis[count($synopsis) - 1]->time;
			$elapsed_time = elapsed_time($end - $start);
		 } else {
		 	$elapsed_time = 0;
		 }

		$timezone = 'America/Vancouver'; // $_COOKIE['timezone'];
        // create report for project_id
        $data = compact('project_id', 'elapsed_time', 'project_id', 'timezone', 'asshash');
        $this->Report_model->create_report($data);

		$assignment = $this->Objectives_model->get_assignment($asshash);

        // redirect to hashed view
        redirect('/report/submitted/' . $project_id . '/' . $asshash);
    }

	public function submitted($synopsis_id, $assignment_hash) {
			$view_data = array(
			'synopsis_url' => site_url() . $assignment_hash.'/'.$synopsis_id
		);

		$assignment = $this->Objectives_model->get_assignment($assignment_hash);

		$report_url = '/report/' . $synopsis_id;
		$status = 'submitted';
		$this->Synopsis_model->update_synopsis_for_report(compact('status', 'report_url', 'synopsis_id'));

		//$this->email_report($project_id, $assignment);

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