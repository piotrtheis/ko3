<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Welcome extends Controller_App_Template_Core {

	public function action_index()
	{
            
		$this->response->body('hello, world admin!');
	}

    public function check_auth()
    {
        
    }

} // End Welcome
