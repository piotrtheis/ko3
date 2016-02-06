<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_App_Core extends Controller
{

    /**
     * Check user auth
     * @var  bool
     */
    public $check_auth = TRUE;

    /**
     * HTTP header fields
     * @var array  
     */
    public $headers = array();

    /**
     * Auth instance wrapper
     * 
     * @return Auth
     */
    public function auth()
    {
        return Auth::instance();
    }

    /**
     * User object wrapper
     * 
     * @return Model_User ORM
     */
    public function user()
    {
        return $this->auth()->get_user();
    }

    /**
     * Session instance wrapper
     * 
     * @return Session
     */
    public function session($group = NULL)
    {
        return Session::instance($group);
    }

    /**
     * Cache instance wrapper
     * 
     * @return Cache
     */
    public function cache($group = NULL)
    {
        return Cache::instance($group);
    }

    /**
     * Check user authentication and authorization
     *
     * @return  void
     * @throw   HTTP_Exception
     * @uses    Auth::logged_in
     * @uses    HTTP_Exception::factory
     */
    abstract public function check_auth();
    

    /**
     * Automatically executed before the controller action. Can be used to set
     * class properties, do authorization checks, and execute other custom code.
     *
     * @return  void
     */
    public function before()
    {
        parent::before();

        if ($this->check_auth)
        {
            $this->check_auth();
        }
    }

    /**
     * Sets request response headers
     *
     * @return  void
     */
    public function set_response_headers()
    {
        if (!empty($this->headers) AND $this->request->is_initial())
        {
            // Sets HTTP header fields
            $this->response->headers($this->headers);
        }
    }

}
