<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class UpdateByQueryRethrottle
 * PanglongxiaElasticsearch API name update_by_query_rethrottle
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UpdateByQueryRethrottle extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_update_by_query/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint update_by_query_rethrottle');
    }

    public function getParamWhitelist(): array
    {
        return [
            'requests_per_second'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): UpdateByQueryRethrottle
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}
