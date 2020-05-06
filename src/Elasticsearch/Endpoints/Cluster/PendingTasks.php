<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cluster;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PendingTasks
 * PanglongxiaElasticsearch API name cluster.pending_tasks
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PendingTasks extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cluster/pending_tasks";
    }

    public function getParamWhitelist(): array
    {
        return [
            'local',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
