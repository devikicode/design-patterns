<?php

namespace Ikicode\DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    abstract public function __clone();

    public function title(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function category(): string
    {
        return $this->category;
    }
}
