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
    public function build()
    {
        self::createFromGlobals();

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
