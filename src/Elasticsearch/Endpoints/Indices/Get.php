<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 * PanglongxiaElasticsearch API name indices.get
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.get');
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'local',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'flat_settings',
            'include_defaults',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
