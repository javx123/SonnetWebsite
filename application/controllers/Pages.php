<?php

class Pages extends Sonnet_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('page_model');
		$this->load->helper('url');
	}

	public function raw ($page) {
		if (!file_exists(APPPATH . 'views/raw/' . $page . '.php')) {
			show_404();
			return;
		}

		$this->load->view('raw/' . $page);
	}

	public function view_page () {
		$page = uri_string() !== '' ? uri_string() : 'home';

		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			$this->raw($page);
			return;
		}

		// Get page title
		$this->view_data['title'] = $this->page_model->get_title($page);

		// check if CSS and/or JS files are available
		$this->view_data['css_files'] = $this->page_model->get_css($page);
		$this->view_data['js_files'] = $this->page_model->get_js($page);

		$this->_render_page('pages/' . $page);
	}
}
