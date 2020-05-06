<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Snapshot;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetRepository
 * PanglongxiaElasticsearch API name snapshot.get_repository
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository";
        }
        return "/_snapshot";
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setRepository($repository): GetRepository
    {
        if (isset($repository) !== true) {
            return $this;
        }
        if (is_array($repository) === true) {
            $repository = implode(",", $repository);
        }
        $this->repository = $repository;

        return $this;
    }
}
