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

interface ResponseParametersInterface
{
    public function __construct(array $parameters, Response $response = null);
    public function getParameters();
    public function getResponse();
}
