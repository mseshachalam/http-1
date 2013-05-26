<?php
/**
 * The Orno Component Library
 *
 * @author  Phil Bennett @philipobenito
 * @license http://www.wtfpl.net/txt/copying/ WTFPL
 */
namespace Orno\Http;

/**
 * Response Interface
 */
interface RequestInterface
{
    /**
     * Builds the request based on globals
     *
     * @return \Orno\Http\RequestInterface
     */
    public function build();

    /**
     * Checks if a request is XML HTTP Request
     *
     * @return boolean
     */
    public function isAjax();

    /**
     * Returns a parsed PATH_INFO string
     *
     * @return string
     */
    public function getPathInfo();

    /**
     * Returns the HTTP method verb
     *
     * @return string
     */
    public function getMethod();

    /**
     * Returns the current scheme, HTTP or HTTPS
     *
     * @return string
     */
    public function getScheme();
}
