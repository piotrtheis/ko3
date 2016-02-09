<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Backend extends Controller_Site
{

    /**
     * Backend module site name
     * @var string
     */
    protected $_mod_name;
    
    /**
     * Backend module primary model
     * @var \Jelly_Model
     */
    protected $_mod_model;
    
    /**
     * Backend model meta object
     * @var \Jelly_Meta
     */
    protected $_mod_model_meta;


    public function before()
    {
        parent::before();
        
        $this->_breadcrumbs = Breadcrumbs::getInstance();
        
        $this->_assets = Asset::instance();
    }

    public function after()
    {

        parent::after();
    }

}
