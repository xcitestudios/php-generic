<?php
namespace com\xcitestudios\Generic\Text\Interfaces;

use stdClass;

/**
 * General interface for something that can render a template style string.
 */
interface TemplatedInterface
{
	/**
	 * Sets the template version of the content to be used during rendering.
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
     * @param stdClass $context Ibject passed in to replace items in the content.
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
     * @return string content rendered using the values in $context
     */
    public function render();
}