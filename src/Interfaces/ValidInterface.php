<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Interfaces;

/**
 * Really simple interface to add a validation check.
 */
interface ValidInterface
{
    /**
     * Checks if this object is valid.
     *
     * @return bool True if it is, false if it isn't.
     */
    public function isValid();
}
