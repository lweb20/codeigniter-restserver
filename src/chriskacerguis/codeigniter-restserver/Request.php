<?php

namespace Restserver\Request;

/**
 * This class is for all things having to do with the request
 *
 * @package         CodeIgniter
 * @license         MIT
 * @version         4.0.0
 */

class Request extends \CI_Controller {

    /**
     * Constructor for the Request class
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

}