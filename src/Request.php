<?php
/**
 * The Orno Component Library
 *
 * @author  Phil Bennett @philipobenito
 * @license http://www.wtfpl.net/txt/copying/ WTFPL
 */
namespace Orno\Http;

use Symfony\Component\HttpFoundation;

class Request extends HttpFoundation\Request implements RequestInterface
{
    /**
     * {@inheritdoc}
     */
    public function get($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->query;
        }

        return $this->query->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function post($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->request;
        }

        return $this->request->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function server($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->server;
        }

        return $this->server->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function files($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->files;
        }

        return $this->files->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function cookie($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->cookies;
        }

        return $this->cookies->get($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function headers($key = null, $default = null)
    {
        if (! is_null($key)) {
            return $this->headers;
        }

        return $this->headers->get($key, $default);
    }
}
