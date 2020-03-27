<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}

	public function homebannerapi(){

		$this->load->model('design/banner');

		$this->load->model('tool/image');
		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if(!empty($this->request->post['language_id'])){
			$data['language_id'] = $this->request->post['language_id'];
		}else{
			$data['language_id'] = '1';
		}
		$banner_id='9';
		$banner = $this->model_design_banner->getBannerapi($data['language_id'],$banner_id);
		$data['banner_info'] = array();
		if($banner){
			foreach ($banner as $banner_value) {
				
				$data['banner_info'][]=array(
					'image'=> $server.'image/catalog/banner/'.$banner_value['image'],
				);
				
			}
		}else{
				$data['banner_info'][]=array(
					'image'=> $server.'image/catalog/bg.png',
				);
				
		}

		if(!empty($data['error_warning'])){
			$json = array("status" => 0, "msg" => $data['error_warning']);
		}else{
			$json = array("status" => 1, "Homebanners" => $data['banner_info']);
		}
		header('Content-type: application/json');
		echo json_encode($json);
	}
}
