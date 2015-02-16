<?php
namespace com\xcitestudios\Generic\Test\Data\Manipulation\Interfaces;

class SerializationInterfaceTestClass implements \com\xcitestudios\Generic\Data\Manipulation\Interfaces\SerializationInterface,
    \JsonSerializable
{
    public $intA;
    public $floatA;
    public $objA;
    public $stringA;
    
    function getIntA() {
        return $this->intA;
    }

    function getFloatA() {
        return $this->floatA;
    }

    function getObjA() {
        return $this->objA;
    }

    function getStringA() {
        return $this->stringA;
    }

    function setIntA($intA) {
        $this->intA = (int)$intA;
        return $this;
    }

    function setFloatA($floatA) {
        $this->floatA = (float)$floatA;
        return $this;
    }

    function setObjA($objA) {
        $this->objA = (object)$objA;
        return $this;
    }

    function setStringA($stringA) {
        $this->stringA = (string)$stringA;
        return $this;
    }

        
    public function deserializeJSON($jsonString) {
        $obj = json_decode($jsonString);
        
        $this->setIntA($obj->intA);
        $this->setFloatA($obj->floatA);
        $this->setStringA($obj->stringA);
        $this->setObjA($obj->objA);
    }

    public function serializeJSON() {
        return \json_encode($this);
    }

    public function jsonSerialize() {
        return [
            'intA' => $this->getIntA(),
            'floatA' => $this->getFloatA(),
            'stringA' => $this->getStringA(),
            'objA' => $this->getObjA(),
        ];
    }
}
