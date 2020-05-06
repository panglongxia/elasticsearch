<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutTemplate
 * PanglongxiaElasticsearch API name indices.put_template
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class PutTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_template/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.put_template');
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'order',
            'create',
            'timeout',
            'master_timeout',
            'flat_settings'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutTemplate
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setName($name): PutTemplate
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
