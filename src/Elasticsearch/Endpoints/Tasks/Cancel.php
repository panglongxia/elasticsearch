<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Tasks;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Cancel
 * PanglongxiaElasticsearch API name tasks.cancel
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Tasks
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Cancel extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_tasks/$task_id/_cancel";
        }
        return "/_tasks/_cancel";
    }

    public function getParamWhitelist(): array
    {
        return [
            'nodes',
            'actions',
            'parent_task_id'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): Cancel
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}
