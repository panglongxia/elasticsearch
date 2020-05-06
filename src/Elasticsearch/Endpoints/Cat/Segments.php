<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cat;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Segments
 * PanglongxiaElasticsearch API name cat.segments
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cat
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
            return "/_cat/segments/$index";
        }
        return "/_cat/segments";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'bytes',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
