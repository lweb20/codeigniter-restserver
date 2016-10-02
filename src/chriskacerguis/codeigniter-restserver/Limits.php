<?php

namespace Restserver\Limit;

class Limit extends \CI_Controller {

    /**
     * Constructor for the Limit class
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
     * Check to see if the limit has been hit
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    private function check()
    {
        if ($this->ip() == false || $this->api_key == false)
        {
            return false;
        }
        return true;
    }

    /**
     * Limit by IP address
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    private function ip()
    {

    }

    /**
     * Limit by API key address
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    private function api_key()
    {

    }

}