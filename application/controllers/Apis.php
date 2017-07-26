<?php

class Apis extends CI_Controller {
    protected $json_data = [];
    
    public function __construct() {
        parent::__construct();
    }
    
    protected function _send_json() {
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($this->json_data));
    }

    public function ks_subscribe() {
        $data = file_get_contents('php://input');
        $data = json_decode($data, TRUE);

        // Making POST request to MailChimp
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, 'https://us15.api.mailchimp.com/3.0/lists/0858f35586/members');
        curl_setopt($request, CURLOPT_POST, 1);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);

        // Data that will be sent
        $query_fields = [
            'email_address' => array_key_exists('email', $data) ? $data['email'] : '',
            'status' => 'subscribed'
        ];
        curl_setopt($request, CURLOPT_POSTFIELDS, json_encode($query_fields));

        // Setting the header
        $query_header = [
            'Content-type: application/json'
        ];
        curl_setopt($request, CURLOPT_HTTPHEADER, $query_header);

        // Adding the API Key from MailChimp
        curl_setopt($request, CURLOPT_USERPWD, 'sonnetlabs:b3b295d7bbc771efa9f20b6b0689797f-us15');

        $post_output = json_decode(curl_exec($request), TRUE);
        curl_close($request);

        if ($post_output['status'] === 'subscribed') {
            $this->json_data['status'] = 'ok';
            
        } else {
            $this->json_data['status'] = 'error';

            if ($post_output['title'] === 'Member Exists') {
                $this->json_data['error'] = 'The email address you entered is already subscribed to the mailing list.';
            } else if ($post_output['title'] === 'Invalid Resource') {
                $this->json_data['error'] = 'The email address you entered is invalid. Please provide a valid email address.';
            } else {
                $this->json_data['error'] = 'Your email address cannot be subscribed at this time. Please try again later.';
            }
        }

        $this->_send_json();
    }
}
