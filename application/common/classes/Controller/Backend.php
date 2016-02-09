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
        $this->_config_attach();

        
        //valid config attach
        if (!(bool) $this->_mod_name)
            throw new Kohana_Exception('Set parent _mod_name field in _config_attach');
            
        if (!(bool) $this->_mod_model)
            throw new Kohana_Exception('Set parent _mod_model field in _config_attach');
        
        if (!$this->_mod_model instanceof Jelly_Model)
            throw new Kohana_Exception('Field _mod_model must by instanceof Jelly_Model');
        
        
        $this->_mod_model_meta = $this->_mod_model->meta();


            parent::before();
    }

    public function after()
    {
        
        parent::after();
    }

    /**
     * Set module name and module model
     */
    abstract protected function _config_attach();
}
