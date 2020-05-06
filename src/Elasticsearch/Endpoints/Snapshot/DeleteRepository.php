<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Snapshot;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteRepository
 * PanglongxiaElasticsearch API name snapshot.delete_repository
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.delete_repository');
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

    public function setRepository($repository): DeleteRepository
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
