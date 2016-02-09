<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Welcome extends Controller_Backend {

	public function action_index()
	{
            echo 'test';
            die;
	}

    public function check_auth()
    {
        
    }

    protected function _config_attach()
    {
        
    }

} // End Welcome
