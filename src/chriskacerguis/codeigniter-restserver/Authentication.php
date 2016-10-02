<?php

namespace Restserver\Authentication;

/**
 * This class is for all types of authentication
 *
 * @package         CodeIgniter
 * @license         MIT
 * @version         4.0.0
 */

class Authentication extends \CI_Controller {


    /**
     * Constructor for the Autentication class
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
     * api key based authentication
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool
     */
    public function api_key($key)
    {
        // does key exist?
        // is it enabled
    }

    /**
     * ldap authentication
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool
     */
    public function ldap($username, $password)
    {

    }

    /**
     * session based authentication (JWT)
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool
     */
    public function session()
    {

    }

}