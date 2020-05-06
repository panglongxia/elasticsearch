<?php

declare(strict_types = 1);
/**
 * Class RegisteredNamespaceInterface
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Namespaces
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

namespace PanglongxiaElasticsearch\Namespaces;

use PanglongxiaElasticsearch\Serializers\SerializerInterface;
use PanglongxiaElasticsearch\Transport;

interface NamespaceBuilderInterface
{
    /**
     * Returns the name of the namespace.  This is what users will call, e.g. the name
     * "foo" will be invoked by the user as `$client->foo()`
     */
    public function getName(): string;

    /**
     * Returns the actual namespace object which contains your custom methods. The transport
     * and serializer objects are provided so that your namespace may do whatever custom
     * logic is required.
     *
     * @param  Transport           $transport
     * @param  SerializerInterface $serializer
     * @return Object
     */
    public function getObject(Transport $transport, SerializerInterface $serializer);
}
