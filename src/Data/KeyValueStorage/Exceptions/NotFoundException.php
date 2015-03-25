<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Data\KeyValueStorage\Exceptions;

use Interop\Container\Exception\NotFoundException as NotFoundExceptionInterface;
use Exception;

/**
 * Thrown by storage interfaces for events.
 *
 * @package com.xcitestudios.Parallelisation
 * @subpackage Data.KeyValueStorage.Exceptions
 */
class NotFoundException extends Exception
    implements NotFoundExceptionInterface
{
}