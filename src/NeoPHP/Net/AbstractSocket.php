<?php

namespace NeoPHP\Net;

/**
 * Class AbstractSocket
 * @package NeoPHP\Net
 */
abstract class AbstractSocket {

    protected $resource;
    protected $streamContextOptions;

    /**
     * AbstractSocket constructor.
     * @param null $resource
     */
    public function __construct($resource = null) {
        $this->resource = $resource;
    }

    /**
     * @param $socket
     */
    public function setResource($socket) {
        $this->resource = $socket;
    }

    /**
     * @return null
     */
    public function getResource() {
        return $this->resource;
    }

    /**
     *
     */
    public function close() {
        if ($this->resource) {
            socket_close($this->resource);
            $this->resource = null;
        }
    }
}