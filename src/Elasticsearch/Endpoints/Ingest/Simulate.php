<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Ingest;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Simulate
 * PanglongxiaElasticsearch API name ingest.simulate
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Simulate extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ingest/pipeline/$id/_simulate";
        }
        return "/_ingest/pipeline/_simulate";
    }

    public function getParamWhitelist(): array
    {
        return [
            'verbose'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): Simulate
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setId($id): Simulate
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
