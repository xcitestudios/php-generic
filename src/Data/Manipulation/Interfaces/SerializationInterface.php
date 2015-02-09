<?php
namespace com\xcitestudios\Generic\Data\Manipulation\Interfaces;

/**
 * General interface for an object that can be converted to/from JSON.
 */
interface SerializationInterface
{
    /**
     * Updates the element implementing this interface using a JSON representation. 
     * This means updating the state of this object with that defined in the JSON 
     * as opposed to returning a new instance of this object.
     *
     * @param string $jsonString Representation of the object
     * @return void
     */
    public function deserialize($jsonString);

    /**
     * Convert this object into JSON so it can be handled by anything that supports JSON.
     *
     * @return string A JSON representation of this object.
     */
    public function serialize();
}