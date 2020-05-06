<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cluster;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class RemoteInfo
 * PanglongxiaElasticsearch API name cluster.remote_info
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RemoteInfo extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_remote/info";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
