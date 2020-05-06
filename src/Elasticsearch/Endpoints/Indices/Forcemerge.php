<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Forcemerge
 * PanglongxiaElasticsearch API name indices.forcemerge
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Forcemerge extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_forcemerge";
        }
        return "/_forcemerge";
    }

    public function getParamWhitelist(): array
    {
        return [
            'flush',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'max_num_segments',
            'only_expunge_deletes'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
