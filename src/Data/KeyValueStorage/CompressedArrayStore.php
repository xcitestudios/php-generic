<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\KeyValueStorage;

use Interop\Container\Exception\ContainerException;
use com\xcitestudios\Generic\Data\KeyValueStorage\Exceptions\NotFoundException;

/**
 * Simple storage for objects in a local in-memory array, serializes and gzdeflate's.
 *
 * @package com.xcitestudios.Parallelisation
 * @subpackage Storage.Event
 */
class CompressedArrayStore extends ArrayStore
{
    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundException  No entry was found for this identifier.
     * @throws ContainerException Error while retrieving the entry.
     *
     * @return mixed Entry.
     */
    public function get($id)
    {
        return unserialize(gzinflate(parent::get($id)));
    }

    /**
     * Store an object.
     *
     * @param string $id     Identifier of the entry to save under.
     * @param mixed  $object
     */
    public function set($id, $event)
    {
        $this->objects[$id] = gzdeflate(serialize($event), 9);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed
     */
    public function current()
    {
        return unserialize(gzinflate(current($this->objects)));
    }
}