<?php

defined('SYSPATH') or die('No direct script access.');

class Request extends Kohana_Request
{

    /**
     * Checks whether the request called by mobile device by useragent string
     * Preg is faster than for loop
     *
     * @return boolean
     *
     * @todo use Request::$user_agent but it is null
     */
    public static function is_mobile()
    {
        $devices = 'android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos';
        if (isset($_SERVER['HTTP_USER_AGENT']))
        {
            return (preg_match("/$devices/i", $_SERVER['HTTP_USER_AGENT']) > 0);
        }
        return FALSE;
    }

    /**
     * Check if we are running under HHVM
     *
     * @return Bool
     */
    public static function isHHVM()
    {
        return defined('HHVM_VERSION');
    }

}
