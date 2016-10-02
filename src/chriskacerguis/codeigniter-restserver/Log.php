<?php

namespace Restserver\Log;

class Log extends \CI_Controller {

    /**
     * Constructor for the Log class
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
        // Is logged enabled?
        // How are we logging (file, table)
        // if table, does it exist, make it if needed
    }

    /**
     * log the request (if enable)
     *
     * @access public
     * @author Chris Kacerguis
     * @return void
     */
    public function save()
    {
        return true;
    }


}
