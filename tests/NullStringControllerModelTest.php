<?php

/*
 * This file is part of the Symfony-Util package.
 *
 * (c) Jean-Bernard Addor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use SymfonyUtil\Component\HttpFoundation\NullStringControllerModel;

/**
 * @covers \SymfonyUtil\Component\HttpFoundation\NullStringControllerModel
 */
final class NullStringControllerModelTest extends TestCase
{
    public function testCanBeCreated()
    {
        $this->assertInstanceOf(
            // ::class, // 5.4 < php
            'SymfonyUtil\Component\HttpFoundation\NullStringControllerModel',
            new NullStringControllerModel('')
        );
    }

    public function testReturnsArray()
    {
        $this->assertInternalType('array', (new NullStringControllerModel())->__invoke('', new Request()));
        $this->assertSame([], (new NullStringControllerModel())->__invoke('', new Request()));
        $this->assertSame(0, count((new NullStringControllerModel())->__invoke('', new Request())));
        $this->assertEmpty((new NullStringControllerModel())->__invoke('', new Request()));
    }
}
