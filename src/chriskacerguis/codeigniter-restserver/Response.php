<?php

namespace Restserver\Response;

class Response extends \CI_Controller {

    /**
     * Constructor for the Response class
     *
     * @access public
     * @author Chris Kacerguis
     * @param string $config Configuration filename minus the file extension
     * @return void
     */
    public function __construct($config = 'rest')
    {
        parent::__construct();
        $this->load->config($config_file, FALSE, TRUE);
    }

    /**
     * send the reponse back to the client
     *
     * @access public
     * @author Chris Kacerguis
     * @param string $data
     * @param string $http_code
     * @return 
     */
    public function send($data = NULL, $http_code = NULL)
    {

    }


}
