<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Info
 * PanglongxiaElasticsearch API name info
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Info extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
