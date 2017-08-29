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

use Symfony\Component\HttpFoundation\Response;

class ResponseParameters
{
    protected $parameters;
    protected $response;

    public function __construct(array $parameters, Response $response = null)
    {
        $this->parameters = $parameters;
        $this->response = $response;
    }

    public function getParameters()
    {
        return $this->parameters; // array
    }

    public function getResponse()
    {
        return $this->response; // Response or null
    }
}
