<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Reindex
 * PanglongxiaElasticsearch API name reindex
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Reindex extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_reindex";
    }

    public function getParamWhitelist(): array
    {
        return [
            'refresh',
            'timeout',
            'wait_for_active_shards',
            'wait_for_completion',
            'requests_per_second',
            'scroll',
            'slices',
            'max_docs'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Reindex
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
