<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class RankEval
 * PanglongxiaElasticsearch API name rank_eval
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RankEval extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_rank_eval";
        }
        return "/_rank_eval";
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): RankEval
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
