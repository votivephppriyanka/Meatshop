<?php
class ControllerAccountPassword extends Controller {
	private $error = array();

	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/password', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/password');

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('account/customer');

			$this->model_account_customer->editPassword($this->customer->getEmail(), $this->request->post['password']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/password', '', true)
		);

		if (isset($this->error['password'])) {
			$data['error_password'] = $this->error['password'];
		} else {
			$data['error_password'] = '';
		}

		if (isset($this->error['confirm'])) {
			$data['error_confirm'] = $this->error['confirm'];
		} else {
			$data['error_confirm'] = '';
		}

		$data['action'] = $this->url->link('account/password', '', true);

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		if (isset($this->request->post['confirm'])) {
			$data['confirm'] = $this->request->post['confirm'];
		} else {
			$data['confirm'] = '';
		}

		$data['back'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/password', $data));
	}

	public function changepasswordapi() {
	
		$this->load->language('account/password');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('account/customer');

			$this->model_account_customer->editPassword($this->request->post['email'], $this->request->post['password']);	

			$data['success'] = "Password changed Successfully";	
		}

		if (isset($this->error['old_password'])) {
			$data['error_warning'] = $this->error['old_password'];
		} 

		if (isset($this->error['email'])) {
			$data['error_warning'] = $this->error['email'];
		} 
		
		if (isset($this->error['password'])) {
			$data['error_warning'] = $this->error['password'];
		} 

		if (isset($this->error['confirm'])) {
			$data['error_warning'] = $this->error['confirm'];
		} 

		// if (isset($this->request->post['old_password'])) {
		// 	$data['old_password'] = $this->request->post['old_password'];
		// } else {
		// 	$data['old_password'] = '';
		// }

		// if (isset($this->request->post['password'])) {
		// 	$data['password'] = $this->request->post['password'];
		// } else {
		// 	$data['password'] = '';
		// }

		// if (isset($this->request->post['confirm'])) {
		// 	$data['confirm'] = $this->request->post['confirm'];
		// } else {
		// 	$data['confirm'] = '';
		// }

		if(!empty($data['error_warning'])){
			$json = array("status" => 0, "msg" => $data);
		}else{
			$json = array("status" => 1, "msg" => $data);
		}
		header('Content-type: application/json');
		echo json_encode($json);

		// $this->response->setOutput($this->load->view('account/password', $data));
	}

	protected function validate() {
		if($this->request->post['email']){
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($this->request->post['email'])) . "' AND status = '1'");

			if ($customer_query->num_rows==0){
				$this->error['email'] = "Email id does not exist";
			}

		}	
		if($this->request->post['old_password']){

			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE LOWER(email) = '" . $this->db->escape(utf8_strtolower($this->request->post['email'])) . "' AND (password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape($this->request->post['old_password']) . "'))))) OR password = '" . $this->db->escape(md5($this->request->post['old_password'])) . "') AND status = '1'");

			if ($customer_query->num_rows==0){
				$this->error['old_password'] = "Old password does not match";
			}
		}

		if ((utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) < 4) || (utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) > 40)) {
			$this->error['password'] = $this->language->get('error_password');
		}

		if ($this->request->post['confirm'] != $this->request->post['password']) {
			$this->error['confirm'] = $this->language->get('error_confirm');
		}

		return !$this->error;
	}
}