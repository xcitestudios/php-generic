<?php
namespace com\xcitestudios\Generic\Test\Data\Manipulation\Interfaces;

class SerializationInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * While testing an interface is pointless, it was a way of giving an example of how
     * to implement the interface and ensure the example remains valid!
     */
    public function testSerialization()
    {
        $testObject = new \stdClass();
        $testObject->a = 5;
        $testObject->b = 's';
        
        $obj = new SerializationInterfaceTestClass();
        $obj->setFloatA(1.1);
        $obj->setIntA(5);
        $obj->setObjA($testObject);
        $obj->setStringA('stringy');
        
        $string = $obj->serializeJSON();
        
        $this->assertInternalType('string', $string);
        
        $newObj = new SerializationInterfaceTestClass();
        $newObj->deserializeJSON($string);
        
        $this->assertEquals($obj->getFloatA(), $newObj->getFloatA());
        $this->assertEquals($obj->getIntA(), $newObj->getIntA());
        $this->assertEquals($obj->getStringA(), $newObj->getStringA());
        $this->assertEquals($obj->getObjA(), $newObj->getObjA());
    }
}
