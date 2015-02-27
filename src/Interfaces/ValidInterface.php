<?php

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
