<?php
/**
 * The Orno Component Library
 *
 * @author  Phil Bennett @philipobenito
 * @license http://www.wtfpl.net/txt/copying/ WTFPL
 */
namespace Orno\Http;

interface RequestInterface
{
    /**
     * Return array or single key from $_GET
     *
     * @param  string $key
     * @return mixed
     */
    public function get($key = null);

    /**
     * Return array or single key from $_POST
     *
     * @param  string $key
     * @return mixed
     */
    public function post($key = null);

    /**
     * Return array or single key from $_SERVER
     *
     * @param  string $key
     * @return mixed
     */
    public function server($key = null);

    /**
     * Return array or single key from $_FILES
     *
     * @param  string $key
     * @return mixed
     */
    public function files($key = null);

    /**
     * Return array or single key from $_COOKIE
     *
     * @param  string $key
     * @return mixed
     */
    public function cookie($key = null);

    /**
     * Return array or single key from headers taken from $_SERVER
     *
     * @param  string $key
     * @return mixed
     */
    public function headers($key = null);
}
