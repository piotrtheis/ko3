<?php

defined('SYSPATH') OR die('No direct script access.');

class Kohana_Exception extends Kohana_Kohana_Exception
{

    /**
     * Get a Response object representing the exception
     *
     * @uses    Kohana_Exception::text
     * @param   Exception  $e
     * @return  Response
     */
    public static function response(Exception $e)
    {

        // Prepare the response object.
        $response = Response::factory();

        // Set the response status
        $response->status(($e instanceof HTTP_Exception) ? $e->getCode() : 500);

        // Set the response headers
        $response->headers('Content-Type', Kohana_Exception::$error_view_content_type . '; charset=' . Kohana::$charset);

        // Set the response body
        $response->body(self::text($e));

        return $response;
    }

}
