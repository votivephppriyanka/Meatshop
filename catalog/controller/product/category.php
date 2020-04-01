<?php
class ControllerProductCategory extends Controller {
	public function index() {
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->get['filter'])) {
			$filter = $this->request->get['filter'];
		} else {
			$filter = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['path'])) {
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path . $url)
					);
				}
			}
		} else {
			$category_id = 0;
		}

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$this->document->setTitle($category_info['meta_title']);
			$this->document->setDescription($category_info['meta_description']);
			$this->document->setKeywords($category_info['meta_keyword']);

			$data['heading_title'] = $category_info['name'];

			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

			// Set the last category breadcrumb
			$data['breadcrumbs'][] = array(
				'text' => $category_info['name'],
				'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'])
			);

			if ($category_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
			$data['compare'] = $this->url->link('product/compare');

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['categories'] = array();

			$results = $this->model_catalog_category->getCategories($category_id);

			foreach ($results as $result) {
				$filter_data = array(
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => true
				);

				$data['categories'][] = array(
					'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
				);
			}

			$data['products'] = array();

			$filter_data = array(
				'filter_category_id' => $category_id,
				'filter_filter'      => $filter,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=DESC' . $url)
			);

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
			if ($page == 1) {
			    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id']), 'canonical');
			} else {
				$this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page='. $page), 'canonical');
			}
			
			if ($page > 1) {
			    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . (($page - 2) ? '&page='. ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
			    $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page='. ($page + 1)), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/category', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/category', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}


	public function product_filter_lc_c(){
			$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->post['category_id'])) {
			$category_id = $this->request->post['category_id'];
		} else {
			$category_id = '';
		}

		if (isset($this->request->post['language_id'])) {
			$language_id = $this->request->post['language_id'];
		} else {
			$language_id = '';
		}

		if (isset($this->request->post['product_filter'])) {
			$product_filter = $this->request->post['product_filter'];
		} else {
			$product_filter = '';
		}

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			
			
			$data['categories'] = array();

			$results = $this->model_catalog_category->getCategories($category_id);

			foreach ($results as $result) {
				$filter_data = array(
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => true
				);

				
			}

			$data['products'] = array();

			$filter_data = array(
				'filter_category_id' => $category_id,
				'filter_filter'      => "",
				'sort'               => "",
				'order'              => "",
				'start'              => "",
				'limit'              => "",
				'language_id'        => $language_id,
				'product_filter'     => $product_filter
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts_country_lc_c($filter_data);
			$local_product_array=array();
			$lc="";
			//$country_lc=array();
			foreach ($results as $result) {
				if($product_filter=="Local"){
					$local_product_array[]=$result['local_product'];	
				}
				if($product_filter=="Chiller"){
					$local_product_array[]=$result['chiller_product'];
				}
			}
			
			foreach ($local_product_array as $lc_value) {
				$lc=$lc_value.','.$lc;			
			}
			
			
			$country_lc = $this->model_catalog_product->getCountry(rtrim($lc, ", "));

			if(!empty($lc)){
				$json = array("status" => 1, "countries" => $country_lc);	
			}else{
				$data['error_warning']="Filter not available";
				$json = array("status" => 0, "msg" => $data['error_warning'], "countries"=>array());
			}
		} 
		else{

			$json = array("status" => 0, "msg" => $data['error_warning'], "countries"=>array());
			
		}
		header('Content-type: application/json');
		echo json_encode($json);
	}


	public function homepagecategoryapi() {
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

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

		$category_info = $this->model_catalog_category->getCategoriesapi($data);
		$data['category'] = array();
		if($category_info){
			foreach ($category_info as $category) {
				if($category['name']=='Beef'){
					$screen_status='1';
				}
				elseif($category['name']=='Camel'){
					$screen_status='1';
				}
				elseif($category['name']=='Lamb'){
					$screen_status='1';
				}
				elseif($category['name']=='Goat'){
					$screen_status='1';
				}
				elseif($category['name']=='Poultry'){
					$screen_status='2';
				}
				elseif($category['name']=='Prepared Dishes'){
					$screen_status='3';
				}
				elseif($category['name']=='Seasonal'){
					$screen_status='4';
				}
				elseif($category['name']=='Offers'){
					$screen_status='5';
				}
				else{
					$screen_status='0';
				}
				
				$data['category'][]=array(
					'category_id'=> $category['category_id'],
					'name'=> $category['name'],
					'image'=> $server.'image/'.$category['image'],
					'screen_status' => $screen_status
				);
				
			}
		}else{
				$data['error_warning']="Categories Not Found";
				
		}

		if(!empty($data['error_warning'])){
			$json = array("status" => 0, "msg" => $data['error_warning']);
		}else{
			$json = array("status" => 1, "category" => $data['category']);
		}
		header('Content-type: application/json');
		echo json_encode($json);
		
	}
	public function productoptionapi() {
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

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

		if(!empty($this->request->post['category_id'])){
			$data['category_id'] = $this->request->post['category_id'];
		}else{
			$data['category_id'] = '';
		}

		if(!empty($this->request->post['country_id'])){
			$data['country_id'] = $this->request->post['country_id'];
		}else{
			$data['country_id'] = '';
		}

		$category_info = $this->model_catalog_category->getproductCategoriesoptionapi($data);
		$data['category'] = array();
		if($category_info){
			foreach ($category_info as $category) {
				if($data['language_id']=='1'){
					if($category['name']=="1/2" || $category['name']=="1/4" || $category['name']=="1/8" || $category['name']=="Whole 1" ){
						if($data['country_id']==""){
							$data['product_option'][]=array(
							'parent_cat_id' => $data['category_id'],
							'category_id'=> $category['category_id'],
							'name'=> $category['name'],
						);
						}else{
							$data['product_option'][]=array(
							'parent_cat_id' => $data['category_id'],
							'category_id'=> $category['category_id'],
							'name'=> $category['name'],
							'country_id' => $data['country_id']
						);
						}
					}else{
						$data['error_warning']="Options are not available";
						$data['product_option']=array();
					}
				}
				if($data['language_id']=='2'){
					if($category['name']=="1/2" || $category['name']=="1/4" || $category['name']=="1/8" || $category['name']==='كله 1' ){
						if($data['country_id']==""){
							$data['product_option'][]=array(
							'parent_cat_id' => $data['category_id'],
							'category_id'=> $category['category_id'],
							'name'=> $category['name'],
						);
						}else{
							$data['product_option'][]=array(
							'parent_cat_id' => $data['category_id'],
							'category_id'=> $category['category_id'],
							'name'=> $category['name'],
							'country_id' => $data['country_id']
						);
						}
					}else{
						$data['error_warning']="Options are not available";
						$data['product_option']=array();
					}
				}
				
			}
		}else{
				$data['error_warning']="Options are not available";
				$data['product_option']=array();
				
		}

		if(!empty($data['error_warning'])){
			$json = array("status" => 0, "msg"=>$data['error_warning'], "product_option" => $data['product_option']);
		}else{
			$json = array("status" => 1, "product_option" => $data['product_option']);
		}
		header('Content-type: application/json');
		echo json_encode($json);
		
	}

	public function products_listing_lc_c() {
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->post['language_id'])) {
			$language_id = $this->request->post['language_id'];
		} else {
			$language_id = '1';
		}

		if (isset($this->request->post['parent_cat_id'])) {
			$parent_cat_id = $this->request->post['parent_cat_id'];
		} else {
			$parent_cat_id = '';
		}

		if (isset($this->request->post['category_id'])) {
			$category_id = $this->request->post['category_id'];
		} else {
			$category_id = '';
		}

		if (isset($this->request->post['product_filter'])) {
			$product_filter = $this->request->post['product_filter'];
		} else {
			$product_filter = "";
		}

		if (isset($this->request->post['product_part'])) {
			$product_part = $this->request->post['product_part'];
		} else {
			$product_part = "";
		}

		if (isset($this->request->post['country_id'])) {
			$country_id = $this->request->post['country_id'];
		} else {
			$country_id = "";
		}

		if($category_id==""){
				$category_id=$this->request->post['parent_cat_id'];
		}else{
				$category_id=$this->request->post['category_id'];
		}

		if(!empty($product_part)){
			$category_info = $this->model_catalog_category->getCategorypart($category_id,$product_part,$language_id);
			
		}else{
			$category_info = $this->model_catalog_category->getCategory($category_id);
			
		}
		// print_r($category_info);
		// die;
		if ($category_info) {
			
			if ($category_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');

			$data['categories'] = array();

			

			if(!empty($product_part)){
				$results = $this->model_catalog_category->getCategoriespartapi($category_info['category_id'],$category_info['parent_id'],$language_id);


					foreach ($results as $result) {
					}

					$data['products'] = array();

					

					$filter_data = array(
						'filter_category_id' => $category_info['category_id'],
						'filter_filter'      => "",
						'sort'               => "",
						'order'              => "",
						'start'              => "",
						'limit'              => "",
						'product_filter'     => $product_filter,
						'language_id'		 => $language_id,
						'country_id'		 => $country_id,
						'product_part'       => $product_part
					);

					$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

					if($product_filter=="" && $country_id==""){
						
						$results = $this->model_catalog_product->getProducts($filter_data);
				
					}else{
						
						$results = $this->model_catalog_product->getProducts_lc_c($filter_data);
						
					}
						
			}else{

					$results = $this->model_catalog_category->getCategories($category_id);


					foreach ($results as $result) {
					}

					$data['products'] = array();

					

					$filter_data = array(
						'filter_category_id' => $category_id,
						'filter_filter'      => "",
						'sort'               => "",
						'order'              => "",
						'start'              => "",
						'limit'              => "",
						'product_filter'     => $product_filter,
						'language_id'		 => $language_id,
						'country_id'		 => $country_id,
						'product_part'       => $product_part
					);

					$product_total = $this->model_catalog_product->getTotalProducts($filter_data);
					
					if($product_filter=="" && $country_id==""){
						
						$results = $this->model_catalog_product->getProducts($filter_data);
				
					}else{
						
						$results = $this->model_catalog_product->getProducts_lc_c($filter_data);
						
					}	
			}


			
			
			if(!empty($results)){
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if (!$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = "";
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = "";
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = "";
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = "";
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'image'       => $image,
					'name'        => $result['name'],
					'price'       => $price,
					'special'     => $special,
					
				);
			}
		}
		else {
			
			$data['error_warning']="Products are not available";
			$data['products']=array();
		}

			
		} else {
			
			$data['error_warning']="Products are not available";
			$data['products']=array();
		}

		if(!empty($data['error_warning'])){
				$json = array("status" => 0, "msg"=>$data['error_warning'], "products_listing" => $data['products']);
		}else{
				$json = array("status" => 1, "products_listing" => $data['products']);
		}
		header('Content-type: application/json');
		echo json_encode($json);
	}
}
