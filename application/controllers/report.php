<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function index() {

        $hash = $this->uri->segment(2);
        if ($hash) {
            // retreive report by hash
            $report = $this->Report_model->retrieve_report($hash);
            // retreive synopsis for this report
            $synopsis = $this->Synopsis_model->synopsis($report->project_id);
		//	$objective = $this->Objectives_model->get_objective($report->project_id);
			$assignment = $this->Objectives_model->get_assignment($report->assignment_hash);

			//ds($assignment,1);

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
                'timezone' => $_COOKIE['timezone']
            );
           $this->load->view('report_view', $data);
        }
    }
}