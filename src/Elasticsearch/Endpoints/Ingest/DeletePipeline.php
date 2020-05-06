<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Ingest;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeletePipeline
 * PanglongxiaElasticsearch API name ingest.delete_pipeline
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeletePipeline extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ingest/pipeline/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint ingest.delete_pipeline');
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setId($id): DeletePipeline
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}
