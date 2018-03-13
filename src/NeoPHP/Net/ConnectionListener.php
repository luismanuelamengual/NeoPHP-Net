<?php

namespace NeoPHP\Net;

/**
 * Interface ConnectionListener
 * @package NeoPHP\Net
 */
interface ConnectionListener {

    /**
     * @param Connection $connection
     * @return mixed
     */
    public function onConnectionAdded(Connection $connection);

    /**
     * @param Connection $connection
     * @return mixed
     */
    public function onConnectionRemoved(Connection $connection);

    /**
     * @param Connection $connection
     * @param $dataReceived
     * @return mixed
     */
    public function onConnectionDataReceived(Connection $connection, $dataReceived);

    /**
     * @param Connection $connection
     * @param $dataSent
     * @return mixed
     */
    public function onConnectionDataSent(Connection $connection, $dataSent);
}
