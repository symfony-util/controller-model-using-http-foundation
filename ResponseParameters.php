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
    protected $response;
    protected $parameters;

    public function __construct(Response $response, array $parameters)
    {
        $this->response = $response;
        $this->parameters = $parameters;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getParameters()
    {
         return $this->parameters;
    }
}
