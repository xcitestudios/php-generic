<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Text\Interfaces;

use com\xcitestudios\Generic\Data\Manipulation\Interfaces\SerializationInterface;

/**
 * General interface for something that can render a template style string and supports serialization.
 *
 * @package com.xcitestudios.Generic
 * @subpackage Text.Interfaces
 */
interface TemplatedSerializableInterface extends TemplatedInterface, SerializationInterface
{
}
