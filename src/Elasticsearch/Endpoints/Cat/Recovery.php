<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cat;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Recovery
 * PanglongxiaElasticsearch API name cat.recovery
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Recovery extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/recovery/$index";
        }
        return "/_cat/recovery";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'active_only',
            'bytes',
            'detailed',
            'h',
            'help',
            'index',
            's',
            'time',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
