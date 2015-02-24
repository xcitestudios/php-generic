<?php
namespace com\xcitestudios\Generic\Text;

use com\xcitestudios\Generic\Text\Interfaces\TemplatedSerializableInterface;
use stdClass;
use JsonSerializable;

/**
 * Simple serializable template using mustache
 */
class Template implements TemplatedSerializableInterface, JsonSerializable
{
    /**
     * @var string
     */
    protected $content;

    /**
     * @var stdClass
     */
    protected $context;

    /**
     * Sets the template version of the content to be used during rendering.
     *
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Gets the template version of the content being used during rendering.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the object passed in to replace items in the content.
     * @param stdClass $context Ibject passed in to replace items in the content.
     * @return void
     */
    public function setContext(stdClass $context)
    {
        $this->context = $context;
    }

    /**
     * Gets the object passed in to replace items in the content.
     *
     * @return stdClass
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Renders content given the context object.
     * @return string content rendered using the values in $context
     */
    public function render()
    {
        $m = new \Mustache_Engine();
        return $m->render($this->content, $this->context);
    }

    /**
     * Updates the element implementing this interface using a JSON representation.
     * This means updating the state of this object with that defined in the JSON
     * as opposed to returning a new instance of this object.
     *
     * @param string $jsonString Representation of the object
     * @return void
     */
    public function deserializeJSON($jsonString)
    {
        $data = \json_decode($jsonString);

        $this->setContent($data->content);
        $this->setContext($data->context);
    }

    /**
     * Convert this object into JSON so it can be handled by anything that supports JSON.
     *
     * @return string A JSON representation of this object.
     */
    public function serializeJSON()
    {
        return \json_encode($this->jsonSerialize());
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    public function jsonSerialize()
    {
        $ret = new stdClass();

        $ret->content = $this->content;
        $ret->context = $this->context;

        return $ret;
    }
}