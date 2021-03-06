<?php
namespace config;

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher as Matcher;

class UrlMatcher extends Matcher
{
    public function __construct(RouteCollection $routes, RequestContext $context)
    {
        parent::__construct($routes, $context);
    }

    public function runMatchCollection($pathinfo)
    {
        return $this->matchCollection(rawurldecode($pathinfo), $this->routes);
    }
}
