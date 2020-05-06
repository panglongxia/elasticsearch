<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Close
 * PanglongxiaElasticsearch API name indices.close
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Close extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_close";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.close');
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'wait_for_active_shards'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
