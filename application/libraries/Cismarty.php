<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( BASEPATH.'../third_party/smarty/Smarty.class.php' );

class Cismarty extends Smarty {

    protected $ci;

    function __construct() {
        parent::__construct();

        $this->ci = & get_instance();
        $this->ci->load->config('smarty');

        $this->template_dir    = $this->ci->config->item('template_dir');
        $this->compile_dir     = $this->ci->config->item('compile_dir');
        $this->left_delimiter  = $this->ci->config->item('left_delimiter');
        $this->right_delimiter = $this->ci->config->item('right_delimiter');

        if (!is_writable( $this->compile_dir)) {
            @chmod( $this->compile_dir, 0777 );
        }
    }

}
