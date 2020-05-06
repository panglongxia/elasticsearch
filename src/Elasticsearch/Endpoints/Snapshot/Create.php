<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Snapshot;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Create
 * PanglongxiaElasticsearch API name snapshot.create
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Create extends AbstractEndpoint
{
    protected $repository;
    protected $snapshot;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;
        $snapshot = $this->snapshot ?? null;

        if (isset($repository) && isset($snapshot)) {
            return "/_snapshot/$repository/$snapshot";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.create');
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'wait_for_completion'
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): Create
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setRepository($repository): Create
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot): Create
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}
