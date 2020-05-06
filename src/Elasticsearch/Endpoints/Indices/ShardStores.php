<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ShardStores
 * PanglongxiaElasticsearch API name indices.shard_stores
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ShardStores extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_shard_stores";
        }
        return "/_shard_stores";
    }

    public function getParamWhitelist(): array
    {
        return [
            'status',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
