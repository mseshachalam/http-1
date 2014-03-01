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
    public function query($key = null, $default = null, $default = null);

    /**
     * Return array or single key from $_POST
     *
     * @param  string $key
     * @return mixed
     */
    public function post($key = null, $default = null);

    /**
     * Return array or single key from $_SERVER
     *
     * @param  string $key
     * @return mixed
     */
    public function server($key = null, $default = null);

    /**
     * Return array or single key from $_FILES
     *
     * @param  string $key
     * @return mixed
     */
    public function files($key = null, $default = null);

    /**
     * Return array or single key from $_COOKIE
     *
     * @param  string $key
     * @return mixed
     */
    public function cookie($key = null, $default = null);

    /**
     * Return array or single key from headers taken from $_SERVER
     *
     * @param  string $key
     * @return mixed
     */
    public function headers($key = null, $default = null);
}
