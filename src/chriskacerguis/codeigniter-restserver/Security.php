<?php

namespace Restserver\Security;

class Security extends \CI_Controller {
    
    /**
     * Constructor for the Security class
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
     * is the IP address provided whitelisted
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool
     */
    public function is_whitelisted($ip)
    {

    }

    /**
     * is the IP address provided blacklisted
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool
     */
    public function is_blacklisted($id)
    {

    }

}