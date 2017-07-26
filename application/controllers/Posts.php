<?php

class Posts extends Sonnet_Controller {

    protected $type = NULL;
    protected $type_slug = NULL;
    protected $posts_per_page = 10;

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->type_slug = explode('/', uri_string())[0];
        $this->type = substr($this->type_slug, 0, -1);
        $this->load->model('post_model', 'model');
        $this->model->set_type($this->type);

        $this->view_data['type'] = $this->type;
        $this->view_data['type_slug'] = $this->type_slug;

        if ($this->type === 'tutorial') $this->posts_per_page = 20;
    }

    public function list_posts($page_number = 1)
    {
        // Getting filters
        if (isset($_GET['tags']))
        {
            $tags = $_GET['tags'];
        }
        else
        {
            $tags = '';
        }

        $this->view_data['title'] = ucfirst($this->type_slug); // Capitalize the first letter
        $this->view_data['css_files'] = [];
        $this->view_data['js_files'] = [
            '//cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.1/jquery.timeago.min.js'
        ];
        
        // load post list
        $offset = ($page_number - 1) * $this->posts_per_page;
        $this->view_data['post_list'] = $this->model->list_posts($this->posts_per_page, $offset, $tags);

        // setup pagenation
        $post_count = $this->model->count_posts($tags);
        $this->view_data['pagination'] = $this->_setup_pagination($post_count, '/' . $this->type_slug . '/');

        $this->_render_page($this->type_slug . '/list');
    }


    public function view_post($slug = NULL)
    {
        $this->view_data['post'] = $this->model->get_post($slug);

        if ($this->view_data['post'])
        {
            $this->load->library('marked');
            $this->view_data['post']['content'] = $this->marked->render($this->view_data['post']['content']);

            $this->view_data['title'] = ucfirst($slug); // Capitalize the first letter
            
            $this->view_data['css_files'] = [];
            $this->view_data['js_files'] = [
                '//cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.1/jquery.timeago.min.js'
            ];

            if ($this->type === 'tutorial')
            {
                array_push($this->view_data['css_files'], '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.css');
                array_push($this->view_data['js_files'], '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js');
            }

            $this->view_data['post'] = $this->model->get_post($slug);
            $this->view_data['post']['content'] = $this->marked->render($this->view_data['post']['content']);

            $this->_render_page($this->type_slug . '/view');
        }
        else
        {
            show_404();
        } 
    }
    

    protected function _setup_pagination($total_count, $base_url = '/', $per_page = 10)
    {
        $this->load->library('pagination');

        $config['base_url'] = $base_url;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['display_pages'] = TRUE;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['uri_segment'] = sizeof(explode('/', $base_url)) - 1;
        $config['num_links'] = 5;
        $config['total_rows'] = $total_count;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }

}