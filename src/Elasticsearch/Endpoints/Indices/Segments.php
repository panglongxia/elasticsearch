<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Segments
 * PanglongxiaElasticsearch API name indices.segments
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Segments extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_segments";
        }
        return "/_segments";
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'verbose'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
