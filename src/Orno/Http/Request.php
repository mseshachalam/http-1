<?php
/**
 * The Orno Component Library
 *
 * @author  Phil Bennett @philipobenito
 * @license http://www.wtfpl.net/txt/copying/ WTFPL
 */
namespace Orno\Http;

use Symfony\Component\HttpFoundation;

/**
 * Request
 */
class Request extends HttpFoundation\Request implements RequestInterface
{
    /**
     * {@inheritdoc}
     */
    public function build(
        array $query      = [],
        array $request    = [],
        array $attributes = [],
        array $cookies    = [],
        array $files      = [],
        array $server     = [],
        $content          = null
    ) {
        $this->initialize(
            (empty($query))   ? $_GET  : $query,
            (empty($request)) ? $_POST : $request,
            $attributes,
            (empty($cookies)) ? $_COOKIE : $cookies,
            (empty($files))   ? $_FILES  : $files,
            (empty($server))  ? $_SERVER : $server,
            $content
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isAjax()
    {
        return $this->isXmlHttpRequest();
    }
}
