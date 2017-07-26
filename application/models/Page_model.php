<?php

class Page_model extends CI_Model {

    protected $titles = [
        'home' => 'Coming Soon',
        'tos' => 'Terms of Service',
        'privacy' => 'Privacy Policy',
        'contact' => 'Contact Us',
        'errors/404' => '404 Not Found'
    ];

    protected $css_files = [
        'livelab/pingpong-cannon' => [
            '/lib/slider/css/slider.css'
        ],
        'livelab/led-matrix' => [
            '/lib/slider/css/slider.css'
        ]
    ];

    protected $js_files = [
        'contact' => [
            '//maps.google.com/maps/api/js?sensor=false&amp;language=en',
            '//cdn.jsdelivr.net/gmap3/6.0.0/gmap3.min.js'
        ]
    ];

    protected $forms = [
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_title($page)
    {
        // Check if title of page exists in model, if not just UCFirst the page slug
        return array_key_exists($page, $this->titles) ? $this->titles[$page] : ucfirst($page);
    }

    public function get_css($page)
    {
        return array_key_exists($page, $this->css_files) ? $this->css_files[$page] : [];
    }

    public function get_js($page)
    {
        $js_files = array_key_exists($page, $this->js_files) ? $this->js_files[$page] : [];
        //array_push($js_files, '/js/common/pages.js');

        // If there is a form associated with the page, include the javascript form handler
        if (array_key_exists($page, $this->forms))
        {
            array_push($js_files, '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js');
            array_push($js_files, '/js/common/form.js');
        }

        return $js_files;
    }

    public function get_form($page)
    {
        return array_key_exists($page, $this->forms) ? $this->forms[$page] : NULL;
    }

}
