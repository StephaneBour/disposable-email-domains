<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use StephaneBour\Disposable\Domains;
use StephaneBour\Disposable\Exceptions\EmailNotValidException;

class IsDisposableTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(Domains::isDisposable('coucou@yopmail.com'));
    }

    public function testFalse()
    {
        $this->assertFalse(Domains::isDisposable('coucou@gmail.com'));
    }

    public function testBadEmail()
    {
        $this->expectException(EmailNotValidException::class);
        Domains::isDisposable('coucougmail.com');
    }

    public function testArray()
    {
        $this->assertNotEmpty(Domains::all());
    }
}
