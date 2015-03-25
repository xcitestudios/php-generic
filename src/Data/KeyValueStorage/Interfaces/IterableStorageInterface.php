<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\KeyValueStorage\Interfaces;

use Iterator;

/**
 * Storage interface for objects with Iterator support.
 *
 * @package com.xcitestudios.Generic
 * @subpackage Data.KeyValueStorage.Interfaces
 */
interface IterableStorageInterface extends StorageInterface, Iterator
{
}