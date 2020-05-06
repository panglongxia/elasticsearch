<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cat;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Repositories
 * PanglongxiaElasticsearch API name cat.repositories
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Repositories extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/repositories";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'local',
            'master_timeout',
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
