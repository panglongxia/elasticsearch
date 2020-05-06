<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Snapshot;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Delete
 * PanglongxiaElasticsearch API name snapshot.delete
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Delete extends AbstractEndpoint
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
        throw new RuntimeException('Missing parameter for the endpoint snapshot.delete');
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setRepository($repository): Delete
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot): Delete
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}
