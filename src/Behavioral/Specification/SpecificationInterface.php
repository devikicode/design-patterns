<?php

namespace Ikicode\DesignPatterns\Behavioral\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}