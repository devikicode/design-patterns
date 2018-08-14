<?php

namespace Ikicode\DesignPatternsTest\Behavioral;

use Ikicode\DesignPatterns\Behavioral\Visitor\Group;
use Ikicode\DesignPatterns\Behavioral\Visitor\Role;
use Ikicode\DesignPatterns\Behavioral\Visitor\RoleVisitor;
use Ikicode\DesignPatterns\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
