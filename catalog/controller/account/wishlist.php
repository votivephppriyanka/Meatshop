<?php
class ControllerAccountWishList extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/wishlist', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/wishlist');

		$this->load->model('account/wishlist');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->get['remove'])) {
			// Remove Wishlist
			$this->model_account_wishlist->deleteWishlist($this->request->get['remove']);

			$this->session->data['success'] = $this->language->get('text_remove');

			$this->response->redirect($this->url->link('account/wishlist'));
		}

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

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/wishlist')
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['products'] = array();

		$results = $this->model_account_wishlist->getWishlist();

		foreach ($results as $result) {
			$product_info = $this->model_catalog_product->getProduct($result['product_id']);

			if ($product_info) {
				if ($product_info['image']) {
					$image = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));
				} else {
					$image = false;
				}

				if ($product_info['quantity'] <= 0) {
					$stock = $product_info['stock_status'];
				} elseif ($this->config->get('config_stock_display')) {
					$stock = $product_info['quantity'];
				} else {
					$stock = $this->language->get('text_instock');
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$product_info['special']) {
					$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				$data['products'][] = array(
					'product_id' => $product_info['product_id'],
					'thumb'      => $image,
					'name'       => $product_info['name'],
					'model'      => $product_info['model'],
					'stock'      => $stock,
					'price'      => $price,
					'special'    => $special,
					'href'       => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
					'remove'     => $this->url->link('account/wishlist', 'remove=' . $product_info['product_id'])
				);
			} else {
				$this->model_account_wishlist->deleteWishlist($result['product_id']);
			}
		}

		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/wishlist', $data));
	}

	public function add() {
		$this->load->language('account/wishlist');

		$json = array();

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			if ($this->customer->isLogged()) {
				// Edit customers cart
				$this->load->model('account/wishlist');

				$this->model_account_wishlist->addWishlist($this->request->post['product_id']);

				$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));

				$json['total'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
			} else {
				if (!isset($this->session->data['wishlist'])) {
					$this->session->data['wishlist'] = array();
				}

				$this->session->data['wishlist'][] = $this->request->post['product_id'];

				$this->session->data['wishlist'] = array_unique($this->session->data['wishlist']);

				$json['success'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));

				$json['total'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addapi() {
		$this->load->language('account/wishlist');

		$json = array();

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}
		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}

		$this->load->model('catalog/product');

		
		if ($customer_id != '0' && $product_id != '0') {
			$product_info = $this->model_catalog_product->getProduct($product_id);
			if ($product_info) {
				
					// Edit customers cart
					$this->load->model('account/wishlist');

					$this->model_account_wishlist->addWishlistapi($this->request->post['product_id'],$this->request->post['customer_id']);

					$data['success'] = "You have added product to your wish list";

					//$data['total'] = $this->model_account_wishlist->getTotalWishlistapi($customer_id);
					
			}
			else {
				$data['error_warning'] = "Something is wrong please try again later";
			}
		}
		else {
			$data['error_warning'] = "Something is wrong please try again later";
		}
		


		if(!empty($data['success'])){
				$json = array("status" => 1, "msg" => $data['success']);
		}else{
			
			$json = array("status" => 0, "msg" => $data['error_warning']);
		}

		header('Content-type: application/json');
		echo json_encode($json);
	}

	public function wishlist_listing_api() {

		$this->load->language('account/wishlist');

		$this->load->model('account/wishlist');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->post['language_id'])) {
			$language_id = $this->request->post['language_id'];
			$this->session->data['language_id']=$language_id;
		} else {
			$language_id = '1';
		}

		$results = $this->model_account_wishlist->getWishlistapi($customer_id);
		if(count($results)>0){
			foreach ($results as $result) {
				$product_info = $this->model_catalog_product->getProduct($result['product_id']);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));
					} else {
						$image = $this->model_tool_image->resize("no_image.png", $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));;
					}

					if ($product_info['quantity'] <= 0) {
						$stock = $product_info['stock_status'];
					} elseif ($this->config->get('config_stock_display')) {
						$stock = $product_info['quantity'];
					} else {
						$stock = $this->language->get('text_instock');
					}

					if (!$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = "";
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = "";
					}

					$data['products'][] = array(
						'product_id' => $product_info['product_id'],
						'image'      => $image,
						'name'       => $product_info['name'],
						//'model'      => $product_info['model'],
						'stock'      => $stock,
						'price'      => $price,
						'special'    => $special
					);
				} else {
					$data['error_warning'] = "You do not have any wishlist product";
				}
			}
	 	} 
	 	else{
			$data['error_warning'] = "You do not have any wishlist product";
		}
		
		if(empty($data['error_warning'])){
				$json = array("status" => 1, "msg" => "Success", "wishlist" => $data['products']);
		}else{
			
			$json = array("status" => 0, "msg" => $data['error_warning'], "wishlist"=>array());
		}

		header('Content-type: application/json');
		echo json_encode($json);

		//$this->response->setOutput($this->load->view('account/wishlist', $data));
	}
	public function removeapi(){
		$this->load->model('account/wishlist');
		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}
		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}

		if($product_id!=0 && $customer_id!=0){
			$this->model_account_wishlist->deleteWishlistapi($product_id,$customer_id);
			$data['success'] = "You have removed product to your wish list";
		}else{
			$data['error_warning'] = "Something is wrong please try again later";
		}

		if(empty($data['error_warning'])){
				$json = array("status" => 1, "msg" => $data['success']);
		}else{
			
			$json = array("status" => 0, "msg" => $data['error_warning']);
		}

		header('Content-type: application/json');
		echo json_encode($json);

	}
}
