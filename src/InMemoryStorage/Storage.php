<?php

namespace InMemoryStorage;


/**
 * Class Storage
 *
 * @package InMemoryStorage
 */
class Storage
{
    /**
     * @var Storage
     */
    protected static $instance = null;
    /**
     * @var array
     */
    protected $storage = array();

    protected function __construct()
    {
        // Thou shalt not construct that which is unconstructable!
    }

    protected function __clone()
    {
        // Me not like clones! Me smash clones!
    }

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * @param string $name
     *
     * @return mixed
     * @throws \Exception
     */
    public function get($name)
    {
        if (!isset($this->storage[$name])) {
            throw new \Exception("Value $name not found in storage");
        }

        return $this->storage[$name];
    }

    /**
     * @param string $name
     * 
     * @return bool
     */
    public function has($name)
    {
        return isset($this-storage[$name]);
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function set($name, $value)
    {
        $this->storage[$name] = $value;
    }
}
