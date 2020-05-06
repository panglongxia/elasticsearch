<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Common\Exceptions\Curl;

use PanglongxiaElasticsearch\Common\Exceptions\ElasticsearchException;
use PanglongxiaElasticsearch\Common\Exceptions\TransportException;

/**
 * Class OperationTimeoutException
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class OperationTimeoutException extends TransportException implements ElasticsearchException
{
}
