<?php

class Sonnet_Exceptions extends CI_Exceptions {

	public function __construct()
	{
		parent::__construct();
		$this->CI =& get_instance();
	}

    public function show_404($page = '', $log_error = TRUE)
    {
        $this->CI->render_404();
    }
}