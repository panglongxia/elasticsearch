<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Common;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

/**
 * Class EmptyLogger
 *
 * Logger that doesn't do anything.  Similar to Monolog's NullHandler,
 * but avoids the overhead of partially loading Monolog
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Common
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class EmptyLogger extends AbstractLogger implements LoggerInterface
{
    /**
     * {@inheritDoc}
     */
    public function log($level, $message, array $context = [])
    {
        return;
    }
}
