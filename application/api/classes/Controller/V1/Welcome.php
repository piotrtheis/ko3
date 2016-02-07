<?php defined('SYSPATH') or die('No direct script access.');


class Controller_V1_Welcome extends Controller_Api {

	public function action_index()
	{
            
            
            $accep_type = Request::accept_type();
            
            //replace any other media type
            unset($accep_type['*/*']);
            
            
            print_r($accep_type); die;
            
            
            
		$this->response->body('hello, world common!');
	}

    public function check_auth()
    {
        
    }

} // End Welcome
