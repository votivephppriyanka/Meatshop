<?php
class ControllerAccountAccount extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/account');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		} 
		
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		
		$data['credit_cards'] = array();
		
		$files = glob(DIR_APPLICATION . 'controller/extension/credit_card/*.php');
		
		foreach ($files as $file) {
			$code = basename($file, '.php');
			
			if ($this->config->get('payment_' . $code . '_status') && $this->config->get('payment_' . $code . '_card')) {
				$this->load->language('extension/credit_card/' . $code, 'extension');

				$data['credit_cards'][] = array(
					'name' => $this->language->get('extension')->get('heading_title'),
					'href' => $this->url->link('extension/credit_card/' . $code, '', true)
				);
			}
		}
		
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		
		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', '', true);
		} else {
			$data['reward'] = '';
		}		
		
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);
		
		$this->load->model('account/customer');
		
		$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());
		
		if (!$affiliate_info) {	
			$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
		} else {
			$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
		}
		
		if ($affiliate_info) {		
			$data['tracking'] = $this->url->link('account/tracking', '', true);
		} else {
			$data['tracking'] = '';
		}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$this->response->setOutput($this->load->view('account/account', $data));
	}

	public function country() {
		$json = array();

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function showprofileapi(){
		$this->load->model('account/customer');
		$customer_id=$this->request->post['customer_id'];

		if(!empty($this->request->post['customer_id'])){
			$customer_info = $this->model_account_customer->getCustomer($this->request->post['customer_id']);

			
			if (!empty($customer_info)) {
				$data['customer_id'] = $customer_info['customer_id'];
			} else {
				$data['customer_id'] = '';
			}
			
			if (!empty($customer_info)) {
				$data['firstname'] = $customer_info['firstname'];
			} else {
				$data['firstname'] = '';
			}

			if (!empty($customer_info)) {
				$data['language_id'] = $customer_info['language_id'];
			} else {
				$data['language_id'] = 1;
			}


			if (!empty($customer_info)) {
				$data['lastname'] = $customer_info['lastname'];
			} else {
				$data['lastname'] = '';
			}

			if (!empty($customer_info)) {
				$data['email'] = $customer_info['email'];
			} else {
				$data['email'] = '';
			}

			if (!empty($customer_info)) {
				$data['telephone'] = $customer_info['telephone'];
			} else {
				$data['telephone'] = '';
			}

			if (!empty($customer_info)) {
				$data['status'] = $customer_info['status'];
			} else {
				$data['status'] = '';
			}

			$this->load->model('tool/image');

			if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
						$base = $this->config->get('config_ssl');
					} else {
						$base = $this->config->get('config_url');
					}
					
			if (!empty($customer_info['profile_image'])) {
				$data['profile_image'] = $base.'image/catalog/profile_image/'.$customer_info['profile_image'];
			} else {
				 $data['profile_image'] = $this->model_tool_image->resize('profile.png', 45, 45);
			}
			 	
		}else{

			$data['error_warning']="No data found";
		}

		if(!empty($data['error_warning'])){
			$json = array("status" => 0, "msg" => $data['error_warning']);
		}else{
			$json = array("status" => 1, "userdetail" => $data);
		}
		header('Content-type: application/json');
		echo json_encode($json);
	}
}
