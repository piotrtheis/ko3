<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Welcome extends Controller_Api {

	public function action_index()
	{
 
            print_r($_SERVER); die;
		$this->response->body('hello, world api!');
	}

    public function check_auth()
    {
        
    }

} // End Welcome
