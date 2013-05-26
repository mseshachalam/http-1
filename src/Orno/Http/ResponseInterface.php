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
interface ResponseInterface
{
    /**
     * Send HTTP headers and body
     *
     * @return \Orno\Http\ResponseInterface
     */
    public function send();
}
