<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Indices;

use PanglongxiaElasticsearch\Common\Exceptions\RuntimeException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Rollover
 * PanglongxiaElasticsearch API name indices.rollover
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Rollover extends AbstractEndpoint
{
    protected $alias;
    protected $new_index;

    public function getURI(): string
    {
        if (isset($this->alias) !== true) {
            throw new RuntimeException(
                'alias is required for rollover'
            );
        }
        $alias = $this->alias;
        $new_index = $this->new_index ?? null;

        if (isset($new_index)) {
            return "/$alias/_rollover/$new_index";
        }
        return "/$alias/_rollover";
    }

    public function getParamWhitelist(): array
    {
        return [
            'include_type_name',
            'timeout',
            'dry_run',
            'master_timeout',
            'wait_for_active_shards'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Rollover
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setAlias($alias): Rollover
    {
        if (isset($alias) !== true) {
            return $this;
        }
        $this->alias = $alias;

        return $this;
    }

    public function setNewIndex($new_index): Rollover
    {
        if (isset($new_index) !== true) {
            return $this;
        }
        $this->new_index = $new_index;

        return $this;
    }
}
