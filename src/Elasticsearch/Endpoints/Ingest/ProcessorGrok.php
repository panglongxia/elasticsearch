<?php
declare(strict_types = 1);

namespace PanglongxiaElasticsearch\Endpoints\Ingest;

use PanglongxiaElasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 * PanglongxiaElasticsearch API name ingest.processor_grok
 * Generated running $ php util/GenerateEndpoints.php 7.4.2
 *
 * @category PanglongxiaElasticsearch
 * @package  PanglongxiaElasticsearch\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ProcessorGrok extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ingest/processor/grok";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
