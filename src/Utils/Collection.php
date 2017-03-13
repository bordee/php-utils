<?php

namespace Utils;

use Iterator;

class Collection implements Iterator
{

    /**
     * @var array
     */
    protected $elements = array();

    /**
     * @param mixed $elem
     */
    public function add($elem)
    {
        $this->elements[] = $elem;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->elements);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return next($this->elements);
    }

    /**
     * @return int
     */
    public function key()
    {
        return key($this->elements);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return key($this->elements) !== null;
    }

    /**
     * @return mixed
     */
    public function rewind()
    {
        return reset($this->elements);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->elements);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->count() === 0;
    }
}