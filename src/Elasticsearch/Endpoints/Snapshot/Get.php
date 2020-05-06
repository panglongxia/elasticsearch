<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Snapshot;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Get
 * PanglongxiaElasticsearch API name snapshot.get
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Get extends AbstractEndpoint
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
        throw new RuntimeException('Missing parameter for the endpoint snapshot.get');
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'ignore_unavailable',
            'verbose'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setRepository($repository): Get
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot): Get
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        if (is_array($snapshot) === true) {
            $snapshot = implode(",", $snapshot);
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}
