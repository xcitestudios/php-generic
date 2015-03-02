<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\Manipulation\Interfaces;

/**
 * General interface for an object that can be converted to/from JSON.
 *
 * @package com.xcitestudios.Generic
 * @subpackage Data.Manipulation.Interfaces
 */
interface SerializationInterface
{
    /**
     * Updates the element implementing this interface using a JSON representation.
     *
     * This means updating the state of this object with that defined in the JSON
     * as opposed to returning a new instance of this object.
     *
     * @param string $jsonString Representation of the object.
     *
     * @return void
     */
    public function deserializeJSON($jsonString);

    /**
     * Convert this object into JSON so it can be handled by anything that supports JSON.
     *
     * @return string A JSON representation of this object.
     */
    public function serializeJSON();
}
