<?php

class Share extends CI_Controller {

    protected $sites = [
        'youtube' => 'https://www.youtube.com/c/SonnetLabs',
        'github' => 'https://github.com/SonnetLabs',
        'facebook' => 'https://www.facebook.com/SonnetLabs',
        'twitter' => 'https://twitter.com/SonnetLabs',
        'googleplus' => 'https://plus.google.com/+SonnetLabs'
    ];

    public function __construct () {
        parent::__construct();
        $this->load->helper('url');
    }

    public function redirect ($site) {
        $site = strtolower($site);
        $site = str_replace('-', '', $site);
        $site = str_replace('_', '', $site);

        if (array_key_exists($site, $this->sites)) {
            redirect($this->sites[$site], 'location', 301);
        } else {
            show_404();
        }
    }

}

/* End of file Share.php */
/* Location: ./application/config/routes.php */

