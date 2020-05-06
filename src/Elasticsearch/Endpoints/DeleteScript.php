<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteScript
 * PanglongxiaElasticsearch API name delete_script
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteScript extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_scripts/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint delete_script');
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
        return 'DELETE';
    }

    public function setId($id): DeleteScript
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
