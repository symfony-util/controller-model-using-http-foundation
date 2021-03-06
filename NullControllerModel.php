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

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NullControllerModel implements ControllerModelInterface
{
    protected $response;

    public function __construct(Response $response = null)
    {
        $this->response = $response;
    }

    public function __invoke(Request $request = null)
    {
        return new ResponseParameters([], $this->response);
    }
}
