<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Api extends Controller_App_Core
{

    public function before()
    {
        parent::before();

        //get header Accept
        $accep_types = Request::accept_type();

        //replace any other media type
        unset($accep_types['*/*']);

        

        // throw exception if none of the accept-types are supported
        if (!(bool)$response_format =  array_intersect_key($this->_accept_formats, $accep_types))
        {
            throw new HTTP_Exception_415('Unsupported Accept media type');
        } else
        {
            //set current accept as response format
            $this->_response_format = key($response_format);
            
            //set response header
            $this->_headers['Content-type'] = $this->_response_format;
        }
        
        
        // throw exception if none version given
        if(!isset($_SERVER['HTTP_API_VERSION'])){
            throw new HTTP_Exception_404('No version specified for this request');
        }
        
        
    }
    
    
    public function after()
    {
        parent::after();
    }

}
