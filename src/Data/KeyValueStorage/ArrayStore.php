<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\KeyValueStorage;

use com\xcitestudios\Generic\Data\KeyValueStorage\Interfaces\CountableIterableStorageInterface;
use com\xcitestudios\Generic\Data\KeyValueStorage\Exceptions\NotFoundException;
use Interop\Container\Exception\ContainerException;

/**
 * Simple storage for objects in a local in-memory key store.
 *
 * @package com.xcitestudios.Parallelisation
 * @subpackage Storage.Event
 */
class ArrayStore implements CountableIterableStorageInterface
{
    /**
     * @var array
     */
    protected $objects = [];

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
        if (!$this->has($id)) {
            throw new NotFoundException(sprintf('%s not found in %s', $id, __CLASS__));
        }

        return $this->objects[$id];
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return boolean
     */
    public function has($id)
    {
        return array_key_exists($id, $this->objects);
    }

    /**
     * Store an object.
     *
     * @param string $id    Identifier of the entry to save under.
     * @param mixed  $event
     */
    public function set($id, $event)
    {
        $this->objects[$id] = $event;
    }

    /**
     * Remove an object.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundException
     */
    public function remove($id)
    {
        if (!$this->has($id)) {
            throw new NotFoundException(sprintf('%s not found in %s', $id, __CLASS__));
        }

        unset($this->objects[$id]);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed
     */
    public function current()
    {
        return current($this->objects);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        next($this->objects);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->objects);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return key($this->objects) !== null;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset($this->objects);
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->objects);
    }
}