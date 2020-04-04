<?php
class ControllerApiCart extends Controller {
	public function add() {
		$this->load->language('api/cart');

		$json = array();
			
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['product'])) {
				$this->cart->clear();

				foreach ($this->request->post['product'] as $product) {
					if (isset($product['option'])) {
						$option = $product['option'];
					} else {
						$option = array();
					}

					$this->cart->add($product['product_id'], $product['quantity'], $option);
				}

				$json['success'] = $this->language->get('text_success');

				unset($this->session->data['shipping_method']);
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['payment_method']);
				unset($this->session->data['payment_methods']);
			} elseif (isset($this->request->post['product_id'])) {
				$this->load->model('catalog/product');

				$product_info = $this->model_catalog_product->getProduct($this->request->post['product_id']);

				if ($product_info) {
					if (isset($this->request->post['quantity'])) {
						$quantity = $this->request->post['quantity'];
					} else {
						$quantity = 1;
					}

					if (isset($this->request->post['option'])) {
						$option = array_filter($this->request->post['option']);
					} else {
						$option = array();
					}

					$product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);

					foreach ($product_options as $product_option) {
						if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
							$json['error']['option'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
						}
					}

					if (!isset($json['error']['option'])) {
						$this->cart->add($this->request->post['product_id'], $quantity, $option);

						$json['success'] = $this->language->get('text_success');

						unset($this->session->data['shipping_method']);
						unset($this->session->data['shipping_methods']);
						unset($this->session->data['payment_method']);
						unset($this->session->data['payment_methods']);
					}
				} else {
					$json['error']['store'] = $this->language->get('error_store');
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	// My custom add to cart api
	public function addtocartapi() {
		$this->load->language('api/cart');

		$json = array();
			
		// if (!isset($this->session->data['api_id'])) {
		// 	$json['error']['warning'] = $this->language->get('error_permission');
		// } else {
		   if (isset($this->request->post['product_id'])) {
				$this->load->model('catalog/product');

				$product_info = $this->model_catalog_product->getProduct($this->request->post['product_id']);

				if ($product_info) {
					if (isset($this->request->post['quantity'])) {
						$quantity = $this->request->post['quantity'];
					} else {
						$quantity = 1;
					}

					if (isset($this->request->post['product_option_id'])) {
						$product_option_id = $this->request->post['product_option_id'];
					} else {
						$product_option_id = "";
					}

					if (isset($this->request->post['product_option_value_id'])) {
						$product_option_value_id = $this->request->post['product_option_value_id'];
					} else {
						$product_option_value_id = "";
					}

					if (isset($this->request->post['customer_id'])) {
						$customer_id = $this->request->post['customer_id'];
					} else {
						$customer_id = 1;
					}

					$poid=explode(',',$product_option_id);
					$povid=explode(',',$product_option_value_id);
					$op=array_filter(array_combine($poid,$povid));

					if($product_option_value_id!="" && $product_option_id != ""){
						$option=$op;
					}else{
						$option=array();
					}
					
					$product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);

					foreach ($product_options as $product_option) {
						if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
							//$json['error']['option'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
							$json['status']='0';
							$json['msg'] = sprintf($this->language->get('error_required'), $product_option['name']);
						}
					}
					$recurring_id=0;

					if (!isset($json['msg'])) {
						$this->cart->addcartapi($this->request->post['product_id'],$quantity,$option, $recurring_id, $customer_id);

						$total= $this->cart->getcartcount($customer_id);
						
						$json['status']='1';
						$json['msg'] = "You have added product your shopping cart";
						$json['cart_count']=$total[0]['total'];
					}
				} else {
					$json['status']='0';
					$json['msg'] = $this->language->get('error_store');
				}
			}else{
				$json['status']='0';
				$json['msg'] = "Something went to wrong please try again later";
			}
		

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	// Edit My custom add to cart api

	public function edit() {
		$this->load->language('api/cart');

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			$this->cart->update($this->request->post['key'], $this->request->post['quantity']);

			$json['success'] = $this->language->get('text_success');

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function remove() {
		$this->load->language('api/cart');

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			// Remove
			if (isset($this->request->post['key'])) {
				$this->cart->remove($this->request->post['key']);

				unset($this->session->data['vouchers'][$this->request->post['key']]);

				$json['success'] = $this->language->get('text_success');

				unset($this->session->data['shipping_method']);
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['payment_method']);
				unset($this->session->data['payment_methods']);
				unset($this->session->data['reward']);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function products() {
		$this->load->language('api/cart');

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			// Stock
			if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
				$json['error']['stock'] = $this->language->get('error_stock');
			}

			// Products
			$json['products'] = array();

			$products = $this->cart->getProducts();

			foreach ($products as $product) {
				$product_total = 0;

				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}

				if ($product['minimum'] > $product_total) {
					$json['error']['minimum'][] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
				}

				$option_data = array();

				foreach ($product['option'] as $option) {
					$option_data[] = array(
						'product_option_id'       => $option['product_option_id'],
						'product_option_value_id' => $option['product_option_value_id'],
						'name'                    => $option['name'],
						'value'                   => $option['value'],
						'type'                    => $option['type']
					);
				}

				$json['products'][] = array(
					'cart_id'    => $product['cart_id'],
					'product_id' => $product['product_id'],
					'name'       => $product['name'],
					'model'      => $product['model'],
					'option'     => $option_data,
					'quantity'   => $product['quantity'],
					'stock'      => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
					'shipping'   => $product['shipping'],
					'price'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
					'total'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
					'reward'     => $product['reward']
				);
			}

			// Voucher
			$json['vouchers'] = array();

			if (!empty($this->session->data['vouchers'])) {
				foreach ($this->session->data['vouchers'] as $key => $voucher) {
					$json['vouchers'][] = array(
						'code'             => $voucher['code'],
						'description'      => $voucher['description'],
						'from_name'        => $voucher['from_name'],
						'from_email'       => $voucher['from_email'],
						'to_name'          => $voucher['to_name'],
						'to_email'         => $voucher['to_email'],
						'voucher_theme_id' => $voucher['voucher_theme_id'],
						'message'          => $voucher['message'],
						'price'            => $this->currency->format($voucher['amount'], $this->session->data['currency']),			
						'amount'           => $voucher['amount']
					);
				}
			}

			// Totals
			$this->load->model('setting/extension');

			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;

			// Because __call can not keep var references so we put them into an array. 
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			
			$sort_order = array();

			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					
					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			$sort_order = array();

			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $totals);

			$json['totals'] = array();

			foreach ($totals as $total) {
				$json['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
				);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	//custom code
	public function viewcartapi() {
		$this->load->language('api/cart');

		$json = array();
		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}

		if (isset($this->request->post['language_id'])) {
			$language_id = $this->request->post['language_id'];
		} else {
			$language_id = 1;
		}

		// if (!isset($this->session->data['api_id'])) {
		// 	$json['error']['warning'] = $this->language->get('error_permission');
		// } else {
			// Stock
			if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
				$json['error']['stock'] = $this->language->get('error_stock');
			}

			// Products
			$json['products'] = array();

			$products = $this->cart->getProductsviewcartapi($customer_id,$language_id);
			if(!empty($products)){
			$this->load->model('tool/image');
			$this->load->model('tool/upload');
			$json['status']='1';
			foreach ($products as $product) {
				$product_total = 0;

				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}

				if ($product['minimum'] > $product_total) {
					$json['error']['minimum'][] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
				}

				if ($product['image']) {
					$image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
				} else {
					$image = $this->model_tool_image->resize('no_image.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));;
				}

				$option_data = array();

				foreach ($product['option'] as $option) {
					$option_data[] = array(
						'product_option_id'       => $option['product_option_id'],
						'product_option_value_id' => $option['product_option_value_id'],
						'name'                    => $option['name'],
						'value'                   => $option['value'],
						'type'                    => $option['type']
					);
				}

				$json['products'][] = array(
					'cart_id'    => $product['cart_id'],
					'product_id' => $product['product_id'],
					'image'      => $image,
					'name'       => $product['name'],
					'model'      => $product['model'],
					'option'     => $option_data,
					'quantity'   => $product['quantity'],
					'stock'      => $product['stock'] ? 'In Stock' : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
					'shipping'   => $product['shipping'],
					'price'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
					'total'      => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
					//'reward'     => $product['reward']
				);
			}

			// Voucher
			// $json['vouchers'] = array();

			// if (!empty($this->session->data['vouchers'])) {
			// 	foreach ($this->session->data['vouchers'] as $key => $voucher) {
			// 		$json['vouchers'][] = array(
			// 			'code'             => $voucher['code'],
			// 			'description'      => $voucher['description'],
			// 			'from_name'        => $voucher['from_name'],
			// 			'from_email'       => $voucher['from_email'],
			// 			'to_name'          => $voucher['to_name'],
			// 			'to_email'         => $voucher['to_email'],
			// 			'voucher_theme_id' => $voucher['voucher_theme_id'],
			// 			'message'          => $voucher['message'],
			// 			'price'            => $this->currency->format($voucher['amount'], $this->session->data['currency']),			
			// 			'amount'           => $voucher['amount']
			// 		);
			// 	}
			// }

			// Totals
			$this->load->model('setting/extension');

			$totals = array();
			$taxes = $this->cart->getTaxesapi($customer_id,$language_id);
			$total = 0;

			// Because __call can not keep var references so we put them into an array. 
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			
			$sort_order = array();

			$results = $this->model_setting_extension->getExtensions('total');

			foreach ($results as $key => $value) {
				$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
			}

			array_multisort($sort_order, SORT_ASC, $results);

			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					// We have to put the totals in an array so that they pass by reference.
					$this->{'model_extension_total_' . $result['code']}->getTotalapi($total_data,$customer_id,$language_id);
				}
				
			}
			// print_r($results);
			// die;
			$sort_order = array();

			foreach ($totals as $key => $value) {
				$sort_order[$key] = $value['sort_order'];
			}
			// print_r($totals);
			// die;
			array_multisort($sort_order, SORT_ASC, $totals);

			$json['totals'] = array();

			if(empty($total['title']=='Shipping')){
				$json['totals'][] = array(
						'title' => 'Shipping',
						'text'  => '0',
					);
			}
			foreach ($totals as $total) {
				
				if(!empty($totals)){
					$json['totals'][] = array(
						'title' => $total['title'],
						'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
					);
				}
			}
		}else{
			$json['status']=0;
			$json['msg']="Your cart is empty";
		}
		//}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	public function cartcountapi(){

		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}
		$total= $this->cart->getcartcount($customer_id);
		if(!empty($total)>0){
			$json['status']='1';
			$json['cart_count']=$total[0]['total'];
		}else{
			$json['status']='0';
			$json['cart_count']=$total[0]['total'];
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}

	public function cartclearapi(){

		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}
		$total = $this->cart->clearapi($customer_id);
		if($total=='true'){
			$json['status']='1';
			$json['msg']='Your shopping cart is empty';
		}else{
			$json['status']='0';
			$json['msg']='Something went to wrong';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
	public function cartremoveapi(){

		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}
		if (isset($this->request->post['cart_id'])) {
			$cart_id = $this->request->post['cart_id'];
		} else {
			$cart_id = 0;
		}
		$total = $this->cart->removeapi($cart_id,$customer_id);
		if($total=='true'){
			$json['status']='1';
			$json['msg']='Your product have successfully removed from cart';
		}else{
			$json['status']='0';
			$json['msg']='Something went to wrong';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}

	public function cartupdatequantityapi(){

		if (isset($this->request->post['customer_id'])) {
			$customer_id = $this->request->post['customer_id'];
		} else {
			$customer_id = 0;
		}
		if (isset($this->request->post['cart_id'])) {
			$cart_id = $this->request->post['cart_id'];
		} else {
			$cart_id = 0;
		}
		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 0;
		}
		$total = $this->cart->updateapi($cart_id,$customer_id,$quantity);
		if($total=='true'){
			$json['status']='1';
			$json['msg']='Your cart have updated successfully';
		}else{
			$json['status']='0';
			$json['msg']='Something went to wrong';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
}
