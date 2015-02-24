<?php
namespace com\xcitestudios\Generic\Test\Text;

use com\xcitestudios\Generic\Text\Template;

class TemplateTest extends \PHPUnit_Framework_TestCase
{
    public function testTemplate()
    {
        $context = new \stdClass();

        $context->alpha = "ALPHA";
        $context->beta = "BETA";
        $context->trueCheck = true;
        $context->falseCheck = false;

        $t = new Template();
        $t->setContent("{{alpha}} {{beta}} {{#trueCheck}}trueCheck{{/trueCheck}} {{#falseCheck}}falseCheck{{/falseCheck}}");
        $t->setContext($context);

        $this->assertEquals('ALPHA BETA trueCheck ', $t->render());
    }

    public function testSerializationConsistency()
    {
        $context = new \stdClass();

        $context->alpha = "ALPHA";
        $context->beta = "BETA";
        $context->trueCheck = true;
        $context->falseCheck = false;

        $t = new Template();
        $t->setContent("{{alpha}} {{beta}} {{#trueCheck}}trueCheck{{/trueCheck}} {{#falseCheck}}falseCheck{{/falseCheck}}");
        $t->setContext($context);

        $t2 = new Template();
        $t2->deserializeJSON($t->serializeJSON());

        $this->assertEquals($t->getContent(), $t2->getContent());
        $this->assertEquals($t->getContext(), $t2->getContext());
    }
}
