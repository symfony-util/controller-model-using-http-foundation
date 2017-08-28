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

interface NullControllerInterface
{
    public function __invoke(Request $request);
}
