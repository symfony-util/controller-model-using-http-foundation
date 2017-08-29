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
use SymfonyUtil\Component\HttpFoundation\NullControllerModel;

// use SymfonyUtil\Component\HttpFoundation\ResponseParameters; // used in string use ::class in php 7.1 symfony 4.0 version

/**
 * @covers \SymfonyUtil\Component\HttpFoundation\NullControllerModel
 */
final class NullControllerModelTest extends TestCase
{
    public function testCanBeCreated()
    {
        $this->assertInstanceOf(
            // ::class, // 5.4 < php
            'SymfonyUtil\Component\HttpFoundation\NullControllerModel',
            new NullControllerModel()
        );
    }

    public function testReturnsResponseParameters()
    {
        $this->assertInstanceOf(
            // ::class, // 5.4 < php
            'SymfonyUtil\Component\HttpFoundation\ResponseParameters',
            (new NullControllerModel())->__invoke(new Request())
        );
        /*
        $this->assertInternalType('array', (new NullControllerModel())->__invoke(new Request()));
        $this->assertSame([], (new NullControllerModel())->__invoke(new Request()));
        $this->assertSame(0, count((new NullControllerModel())->__invoke(new Request())));
        $this->assertEmpty((new NullControllerModel())->__invoke(new Request()));
        */
    }
}
