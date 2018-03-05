<?php

/*
 * This file is part of the Symfony-Util package.
 *
 * (c) Jean-Bernard Addor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SymfonyUtil\Component\HttpFoundation;

// Similar namespace in Symfony
// https://github.com/symfony/symfony/tree/v3.3.8/src/Symfony/Component/Routing/Generator

use Symfony\Component\HttpFoundation\Request;

// Used from same namespace
// ReRouteControllerModelInterface
// ReRouteInterface
// ResponseParameters

class ReRouteControllerModel implements ReRouteControllerModelInterface
{
    protected $reRoute;

    public function __construct(ReRouteInterface $reRoute)
    {
        $this->reRoute = $reRoute;
    }

    /**
     * Returns ResponseParameters to the given route with the given parameters.
     *
     * @param string $routeName  The name of the route
     * @param mixed  $parameters An array of parameters
     *
     * @return ResponseParametersInterface
     *
     * @see Interface ReRouteControllerModelInterface
     */
    public function __invoke($routeName, $parameters = [], Request $request = null)
    {
        // return new ResponseParameters([], ($this->reRoute)($routeName, $parameters)); // PHP 7+
        return new ResponseParameters([], call_user_func($this->reRoute, $routeName, $parameters)); // PHP 4+ (5+)
    }
}

// Inspired from https://github.com/symfony/symfony/blob/v3.3.8/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php
