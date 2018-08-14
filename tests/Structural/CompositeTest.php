<?php

namespace Ikicode\DesignPatternsTest\Structural;

use Ikicode\DesignPatterns\Structural\Composite\Form;
use Ikicode\DesignPatterns\Structural\Composite\InputElement;
use Ikicode\DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        // This is just an example, in a real world scenario it is important to remember that web browsers do not
        // currently support nested forms

        $this->assertEquals(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}
