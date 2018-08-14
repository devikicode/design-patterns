<?php

namespace Ikicode\DesignPatterns\Structural\Bridge;

abstract class PrintService
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}