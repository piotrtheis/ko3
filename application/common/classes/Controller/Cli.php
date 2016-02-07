<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Cli extends Controller
{

    public function before()
    {
        parent::before();

//         Kohana::$is_cli = TRUE;
    }

    public function action_index()
    {
        $this->response->body('hello, world cli!');
    }

}
