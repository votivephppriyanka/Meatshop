<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');
		
		$data['text_project'] = $this->language->get('text_project');
		$data['text_project_arab'] = $this->language->get('text_project_arab');
		$data['text_documentation'] = $this->language->get('text_documentation');
		$data['text_support'] = $this->language->get('text_support');

		return $this->load->view('common/footer', $data);
	}
}