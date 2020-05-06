<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\ConnectionPool;

use PanglongxiaElasticsearch\ConnectionPool\Selectors\SelectorInterface;
use PanglongxiaElasticsearch\Connections\Connection;
use PanglongxiaElasticsearch\Connections\ConnectionFactoryInterface;
use PanglongxiaElasticsearch\Connections\ConnectionInterface;

class SimpleConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * {@inheritdoc}
     */
    public function __construct($connections, SelectorInterface $selector, ConnectionFactoryInterface $factory, $connectionPoolParams)
    {
        parent::__construct($connections, $selector, $factory, $connectionPoolParams);
    }

    public function nextConnection(bool $force = false): ConnectionInterface
    {
        return $this->selector->select($this->connections);
    }

    public function scheduleCheck(): void
    {
    }
}
