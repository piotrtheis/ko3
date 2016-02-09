<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_App_Template_Core extends Controller_App_Core
{

    /**
     * Page template
     * @var  View
     */
    public $template = 'layout/template';

    /**
     * Page body content
     * @var  View
     */
    public $view;

    /**
     * Auto render template
     * @var  boolean  
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
