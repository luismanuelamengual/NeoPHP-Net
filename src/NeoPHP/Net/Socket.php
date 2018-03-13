<?php

namespace NeoPHP\Net;

/**
 * Class Socket
 * @package NeoPHP\Net
 */
class Socket extends AbstractSocket {

    /**
     * @param $host
     * @param $port
     * @return bool
     */
    public function connect($host, $port) {
        $this->resource = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        return @socket_connect($this->resource, $host, $port);
    }

    /**
     * @param $data
     * @return int
     */
    public function send($data) {
        return @socket_write($this->resource, $data);
    }

    /**
     * @param int $length
     * @return string
     */
    public function read($length = 1024) {
        return @socket_read($this->resource, $length, PHP_NORMAL_READ);
    }
}