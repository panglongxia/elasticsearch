<?php

declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Namespaces;

use PanglongxiaElasticsearch\Common\Exceptions\Missing404Exception;
use PanglongxiaElasticsearch\Common\Exceptions\RoutingMissingException;
use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;
use PanglongxiaElasticsearch\Transport;
use GuzzleHttp\Ring\Future\FutureArrayInterface;

/**
 * Trait AbstractNamespace
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Namespaces
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
trait BooleanRequestWrapper
{
    /**
     * Perform Request
     *
     * @throws Missing404Exception
     * @throws RoutingMissingException
     */
    public static function performRequest(AbstractEndpoint $endpoint, Transport $transport)
    {
        try {
            $response = $transport->performRequest(
                $endpoint->getMethod(),
                $endpoint->getURI(),
                $endpoint->getParams(),
                $endpoint->getBody(),
                $endpoint->getOptions()
            );

            $response = $transport->resultOrFuture($response, $endpoint->getOptions());
            if (!($response instanceof FutureArrayInterface)) {
                if ($response['status'] === 200) {
                    return true;
                } else {
                    return false;
                }
            } else {
                // async mode, can't easily resolve this...punt to user
                return $response;
            }
        } catch (Missing404Exception $exception) {
            return false;
        } catch (RoutingMissingException $exception) {
            return false;
        }
    }
}
