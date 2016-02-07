<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_App_Template extends Controller_App_Core
{

    /**
     * @var  View  page template
     */
    public $template = 'layout/template';

    /**
     * @var  View  page body content
     */
    public $view;

    /**
     * @var  boolean  auto render template
     * */
    public $auto_render = TRUE;

    /**
     * Loads the template [View] object.
     */
    public function before()
    {
        parent::before();

        if ($this->auto_render === TRUE)
        {
            // Load the template
            $this->template = View::factory($this->template);
        }
    }

    /**
     * Assigns the template [View] as the request response.
     */
    public function after()
    {
        //send request headers
        parent::after();


        if ($this->auto_render === TRUE)
        {
            $this->template->content = $this->view;
            
            $this->response->body($this->template->render());
        }
    }

}
