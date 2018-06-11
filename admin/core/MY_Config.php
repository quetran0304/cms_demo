<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH."third_party/MX/Config.php";

class MY_Config extends MX_Config {
	public function site_url($uri = '', $protocol = NULL){    
        if (is_array($uri)){
            $uri = implode('/', $uri);
        }
        if (function_exists('get_instance')){
            $uri = get_instance()->lang->localized($uri);            
        }
        return parent::site_url($uri, $protocol);
    }	
}
/* End of file */