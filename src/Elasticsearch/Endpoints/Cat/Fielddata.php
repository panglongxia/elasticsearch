<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Cat;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Fielddata
 * PanglongxiaElasticsearch API name cat.fielddata
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Fielddata extends AbstractEndpoint
{
    protected $fields;

    public function getURI(): string
    {
        $fields = $this->fields ?? null;

        if (isset($fields)) {
            return "/_cat/fielddata/$fields";
        }
        return "/_cat/fielddata";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'bytes',
            'h',
            'help',
            's',
            'v',
            'fields'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setFields($fields): Fielddata
    {
        if (isset($fields) !== true) {
            return $this;
        }
        if (is_array($fields) === true) {
            $fields = implode(",", $fields);
        }
        $this->fields = $fields;

        return $this;
    }
}
