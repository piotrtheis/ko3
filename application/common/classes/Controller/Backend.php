<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Backend extends Controller_Site
{
    /**
     * SEO tags
     * @var string
     */
    public $title;
    public $keywords;
    public $meta_title;
    public $meta_description;
    
    
    /**
     * Open graph tags
     * @var string
     */
    public $og_title;
    public $og_image;
    public $og_description;
    
    /**
     * Twitter cards
     * @var string
     */
    public $twitter_title;
    public $twitter_image;
    public $twitter_description;
    
    
    /**
     * Css, js wrapper
     * @var \Assets
     */
    protected $_assets;
    
    
    /**
     * Page breadcrumbs
     * @var \Breadcrumbs
     */
    protected $_breadcrumbs;



    public function before()
    {
        parent::before();
        
        $this->_breadcrumbs = Breadcrumbs::getInstance();
        
        $this->_assets = Asset::instance();
    }

    public function after()
    {
        View::set_global('title', $this->title);
        View::set_global('keywords', $this->keywords);
        View::set_global('meta_title', $this->meta_title);
        View::set_global('meta_description', $this->meta_description);
        View::set_global('og_title', $this->og_title);
        View::set_global('og_image', $this->og_image);
        View::set_global('og_description', $this->og_description);
        View::set_global('twitter_title', $this->twitter_title);
        View::set_global('twitter_image', $this->twitter_image);
        View::set_global('twitter_description', $this->twitter_description);
        View::set_global('asets', $this->_assets->render());
        View::set_global('breadcrumbs', $this->_breadcrumbs);
        
        parent::after();
    }

}
