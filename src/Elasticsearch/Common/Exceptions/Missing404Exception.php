<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Common\Exceptions;

/**
 * Missing404Exception
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Missing404Exception extends \Exception implements ElasticsearchException
{
}
