<?php

namespace LayarTancap\Feature;

!defined( 'WPINC ' ) or die;

/**
 * Initiate plugins
 *
 * @package    LayarTancap
 * @subpackage LayarTancap\Includes
 */

class Frontend extends Feature {

    /**
     * Feature construect
     * @return void
     * @var    object   $plugin     Feature configuration
     * @pattern prototype
     */
    public function __construct($plugin){
        $this->key = 'core_frontend';
        $this->name = 'Frontend';
        $this->description = 'Handles plugin frontend core function';
    }

}