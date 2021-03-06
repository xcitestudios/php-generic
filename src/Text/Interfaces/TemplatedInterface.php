<?php
/**
 * com.xcitestudios.Generic
 *
 * @copyright Wade Womersley (xcitestudios)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link https://xcitestudios.com/
 */

namespace com\xcitestudios\Generic\Text\Interfaces;

use stdClass;

/**
 * General interface for something that can render a template style string.
 *
 * @package com.xcitestudios.Generic
 * @subpackage Text.Interfaces
 */
interface TemplatedInterface
{
    /**
     * Sets the template version of the content to be used during rendering.
     *
     * @param string $content Template content.
     *
     * @return void
     */
    public function setContent($content);

    /**
     * Gets the template version of the content being used during rendering.
     *
     * @return string
     */
    public function getContent();

    /**
     * Sets the object passed in to replace items in the content.
     *
     * @param stdClass $context Ibject passed in to replace items in the content.
     *
     * @return void
     */
    public function setContext(stdClass $context);

    /**
     * Gets the object passed in to replace items in the content.
     *
     * @return stdClass
     */
    public function getContext();

    /**
     * Renders content given the context object.
     *
     * @return string content rendered using the values in $context
     */
    public function render();
}
