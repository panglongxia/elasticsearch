<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Common\Exceptions;

/**
 * TransportException
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class TransportException extends \Exception implements ElasticsearchException
{
}
