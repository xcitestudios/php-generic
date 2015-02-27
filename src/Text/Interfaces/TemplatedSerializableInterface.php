<?php

namespace com\xcitestudios\Generic\Text\Interfaces;

use com\xcitestudios\Generic\Data\Manipulation\Interfaces\SerializationInterface;

/**
 * General interface for something that can render a template style string and supports serialization.
 */
interface TemplatedSerializableInterface extends TemplatedInterface, SerializationInterface
{
}
