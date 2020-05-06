<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExistsType
 * PanglongxiaElasticsearch API name indices.exists_type
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ExistsType extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/_mapping/$type";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.exists_type');
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}
