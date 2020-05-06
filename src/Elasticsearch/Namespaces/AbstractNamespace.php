<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Namespaces;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;
use PanglongxiaElasticsearch\Transport;

/**
 * Class AbstractNamespace
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Namespaces
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
abstract class AbstractNamespace
{
    /**
     * @var \PanglongxiaElasticsearch\Transport
     */
    protected $transport;

    /**
     * @var callable
     */
    protected $endpoints;

    public function __construct(Transport $transport, callable $endpoints)
    {
        $this->transport = $transport;
        $this->endpoints = $endpoints;
    }

    /**
     * @return null|mixed
     */
    public function extractArgument(array &$params, string $arg)
    {
        if (array_key_exists($arg, $params) === true) {
            $val = $params[$arg];
            unset($params[$arg]);
            return $val;
        } else {
            return null;
        }
    }

    protected function performRequest(AbstractEndpoint $endpoint)
    {
        $response = $this->transport->performRequest(
            $endpoint->getMethod(),
            $endpoint->getURI(),
            $endpoint->getParams(),
            $endpoint->getBody(),
            $endpoint->getOptions()
        );

        return $this->transport->resultOrFuture($response, $endpoint->getOptions());
    }
}
