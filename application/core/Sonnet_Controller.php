<?php

abstract class Sonnet_Controller extends CI_Controller {

    protected $view_data = [];

    public function __construct()
    {
        parent::__construct();
    }

    protected function _render_page($view, $show_header = TRUE, $show_footer = TRUE, $render = FALSE)
    {   
        // Load static files
        $this->view_data['css_files'] = isset($this->view_data['css_files']) ? $this->view_data['css_files'] : [];
        if (file_exists(FCPATH . '/public/css/' . $view . '.css')) array_push($this->view_data['css_files'], '/css/' . $view . '.css');

        $this->view_data['js_files'] = isset($this->view_data['js_files']) ? $this->view_data['js_files'] : [];
        if (file_exists(FCPATH . '/public/js/' . $view . '.js')) array_push($this->view_data['js_files'], '/js/' . $view . '.js');

        // Render HTML
        if ($show_header) $header_html = $this->load->view('templates/header_default', $this->view_data, $render);
        else $header_html = $this->load->view('templates/header_minimal', $this->view_data, $render);
        $view_html = $this->load->view($view, $this->view_data, $render);
        if ($show_footer) $footer_html = $this->load->view('templates/footer_default', $this->view_data, $render);
        else $footer_html = $this->load->view('templates/footer_minimal', $this->view_data, $render);

        if ($render) return $header_html . $view_html . $footer_html;
    }

    public function render_404()
    {
        $this->output->set_status_header('404');
        $this->view_data['title'] = '404 Not Found';
        echo $this->_render_page('errors/404', FALSE, FALSE, TRUE);
    }

}
