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
// https://github.com/symfony/symfony/tree/v3.3.8/src/Symfony/Component/HttpFoundation

use Symfony\Component\HttpFoundation\Request;

// use SymfonyUtil\Component\HttpFoundation\ResponseParameters; // for future return type

interface ReRouteControllerModelInterface
{
    /**
     * Returns ResponseParameters to the given route with the given parameters.
     *
     * @param string  $route      The name of the route
     * @param mixed   $parameters An array of parameters
     * @param Request $request    May be used in some redirecting implementations for eg. browser detection
     *
     * @return ResponseParameters
     */
    public function __invoke($route, $parameters = [], Request $request = null);
}

// Inspired from https://github.com/symfony/symfony/blob/v3.3.8/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php
