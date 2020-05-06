<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutSettings
 * PanglongxiaElasticsearch API name indices.put_settings
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutSettings extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_settings";
        }
        return "/_settings";
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'timeout',
            'preserve_existing',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'flat_settings'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutSettings
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
