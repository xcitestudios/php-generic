<?php
namespace com\xcitestudios\Generic\Interfaces;

/**
 * Really simple interface to add a validation check.
 */
interface ValidInterface
{
    /**
     * Is this object valid?
     *
     * @return bool True if it is, false if it isn't
     */
    public function IsValid();
}