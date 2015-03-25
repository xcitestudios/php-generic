<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\KeyValueStorage\Interfaces;

use com\xcitestudios\Generic\Data\KeyValueStorage\Exceptions\NotFoundException;
use Interop\Container\ContainerInterface;
use Iterator;

/**
 * Storage interface for objects.
 *
 * @package com.xcitestudios.Generic
 * @subpackage Data.KeyValueStorage.Interfaces
 */
interface StorageInterface extends ContainerInterface, Iterator
{
    /**
     * Store an object.
     *
     * @param string $id     Identifier of the entry to save under.
     * @param mixed  $object Object to store
     */
    public function set($id, $object);

    /**
     * Remove an object.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundException
     */
    public function remove($id);
}