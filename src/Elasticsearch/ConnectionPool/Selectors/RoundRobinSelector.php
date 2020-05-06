<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\ConnectionPool\Selectors;

use PanglongxiaElasticsearch\Connections\ConnectionInterface;

/**
 * Class RoundRobinSelector
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\ConnectionPool\Selectors\ConnectionPool
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RoundRobinSelector implements SelectorInterface
{
    /**
     * @var int
     */
    private $current = 0;

    /**
     * Select the next connection in the sequence
     *
     * @param ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     */
    public function select(array $connections): ConnectionInterface
    {
        $returnConnection = $connections[$this->current % count($connections)];

        $this->current += 1;

        return $returnConnection;
    }
}
