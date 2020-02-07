<?php
namespace Core;

abstract class FizzBuzzAbstract implements FizzBuzzInterface
{

    protected $nextHandler;

    public function __construct(FizzBuzzAbstract $handler = null)
    {
        $this->nextHandler = $handler;
    }

    public function runHandlers($number)
    {
        $processed = $this->handle($number);

        if ($processed === null && $this->nextHandler !== null) {
            $processed = $this->nextHandler->runHandlers($number);
        }

        return $processed;
    }

}