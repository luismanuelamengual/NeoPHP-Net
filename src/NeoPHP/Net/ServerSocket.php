<?php

namespace NeoPHP\Net;

use RuntimeException;

/**
 * Class ServerSocket
 * @package NeoPHP\Net
 */
class ServerSocket extends AbstractSocket {

    /**
     * ServerSocket constructor.
     * @param $port
     */
    public function __construct($port) {
        parent::__construct();
        $resource = socket_create_listen($port);
        if (is_resource($resource)) {
            $this->setResource($resource);
        }
        else {
            throw new RuntimeException("Server socket on port \"$port\" could not be created !!. " . socket_strerror(socket_last_error()));
        }
    }

    /**
     * @return Socket
     */
    public function accept() {
        $resource = socket_accept($this->resource);
        return new Socket($resource);
    }
}