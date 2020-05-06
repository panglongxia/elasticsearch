<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\ConnectionPool;

use PanglongxiaElasticsearch\Connections\ConnectionInterface;

/**
 * ConnectionPoolInterface
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\ConnectionPool
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface ConnectionPoolInterface
{
    public function nextConnection(bool $force = false): ConnectionInterface;

    public function scheduleCheck(): void;
}
