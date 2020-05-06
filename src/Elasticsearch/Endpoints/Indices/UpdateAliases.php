<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class UpdateAliases
 * PanglongxiaElasticsearch API name indices.update_aliases
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UpdateAliases extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_aliases";
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): UpdateAliases
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
