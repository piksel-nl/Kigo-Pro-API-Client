<?php
/**
 * PropertyHouseRulesApi
 * PHP version 5
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */

/**
 * Kigo Pro - Channel Manager API
 *
 * https://www.kigoapis.com/pro/v1/swagger/?urls.primaryName=Channel%20Manager%20API%20v2
 *
 * The version of the OpenAPI document: channels-v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Piksel\KigoPro\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Piksel\KigoPro\ApiException;
use Piksel\KigoPro\Configuration;
use Piksel\KigoPro\HeaderSelector;
use Piksel\KigoPro\ObjectSerializer;

/**
 * PropertyHouseRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class PropertyHouseRulesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesGet
     *
     * @param  int $id id (required)
     *
     * @throws \Piksel\KigoPro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Piksel\KigoPro\Model\ValidationErrorException|\Piksel\KigoPro\Model\GetHouseRulesVm
     */
    public function proV1ContentPropertiesIdHouserulesGet($id)
    {
        list($response) = $this->proV1ContentPropertiesIdHouserulesGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesGetWithHttpInfo
     *
     * @param  int $id (required)
     *
     * @throws \Piksel\KigoPro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Piksel\KigoPro\Model\ValidationErrorException|\Piksel\KigoPro\Model\GetHouseRulesVm, HTTP status code, HTTP response headers (array of strings)
     */
    public function proV1ContentPropertiesIdHouserulesGetWithHttpInfo($id)
    {
        $request = $this->proV1ContentPropertiesIdHouserulesGetRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 400:
                    if ('\Piksel\KigoPro\Model\ValidationErrorException' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Piksel\KigoPro\Model\ValidationErrorException', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\Piksel\KigoPro\Model\GetHouseRulesVm' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Piksel\KigoPro\Model\GetHouseRulesVm', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Piksel\KigoPro\Model\GetHouseRulesVm';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Piksel\KigoPro\Model\ValidationErrorException',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Piksel\KigoPro\Model\GetHouseRulesVm',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesGetAsync
     *
     * 
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function proV1ContentPropertiesIdHouserulesGetAsync($id)
    {
        return $this->proV1ContentPropertiesIdHouserulesGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function proV1ContentPropertiesIdHouserulesGetAsyncWithHttpInfo($id)
    {
        $returnType = '\Piksel\KigoPro\Model\GetHouseRulesVm';
        $request = $this->proV1ContentPropertiesIdHouserulesGetRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'proV1ContentPropertiesIdHouserulesGet'
     *
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function proV1ContentPropertiesIdHouserulesGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling proV1ContentPropertiesIdHouserulesGet'
            );
        }

        $resourcePath = '/pro/v1/content/properties/{id}/houserules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesPut
     *
     * @param  int $id id (required)
     * @param  \Piksel\KigoPro\Model\PutHouseRulesCommand $put_house_rules_command put_house_rules_command (optional)
     *
     * @throws \Piksel\KigoPro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Piksel\KigoPro\Model\ValidationErrorException|\Piksel\KigoPro\Model\BooleanCommandOkEnvelope
     */
    public function proV1ContentPropertiesIdHouserulesPut($id, $put_house_rules_command = null)
    {
        list($response) = $this->proV1ContentPropertiesIdHouserulesPutWithHttpInfo($id, $put_house_rules_command);
        return $response;
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesPutWithHttpInfo
     *
     * @param  int $id (required)
     * @param  \Piksel\KigoPro\Model\PutHouseRulesCommand $put_house_rules_command (optional)
     *
     * @throws \Piksel\KigoPro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Piksel\KigoPro\Model\ValidationErrorException|\Piksel\KigoPro\Model\BooleanCommandOkEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function proV1ContentPropertiesIdHouserulesPutWithHttpInfo($id, $put_house_rules_command = null)
    {
        $request = $this->proV1ContentPropertiesIdHouserulesPutRequest($id, $put_house_rules_command);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 400:
                    if ('\Piksel\KigoPro\Model\ValidationErrorException' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Piksel\KigoPro\Model\ValidationErrorException', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\Piksel\KigoPro\Model\BooleanCommandOkEnvelope' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Piksel\KigoPro\Model\BooleanCommandOkEnvelope', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Piksel\KigoPro\Model\BooleanCommandOkEnvelope';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Piksel\KigoPro\Model\ValidationErrorException',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Piksel\KigoPro\Model\BooleanCommandOkEnvelope',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesPutAsync
     *
     * 
     *
     * @param  int $id (required)
     * @param  \Piksel\KigoPro\Model\PutHouseRulesCommand $put_house_rules_command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function proV1ContentPropertiesIdHouserulesPutAsync($id, $put_house_rules_command = null)
    {
        return $this->proV1ContentPropertiesIdHouserulesPutAsyncWithHttpInfo($id, $put_house_rules_command)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation proV1ContentPropertiesIdHouserulesPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $id (required)
     * @param  \Piksel\KigoPro\Model\PutHouseRulesCommand $put_house_rules_command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function proV1ContentPropertiesIdHouserulesPutAsyncWithHttpInfo($id, $put_house_rules_command = null)
    {
        $returnType = '\Piksel\KigoPro\Model\BooleanCommandOkEnvelope';
        $request = $this->proV1ContentPropertiesIdHouserulesPutRequest($id, $put_house_rules_command);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'proV1ContentPropertiesIdHouserulesPut'
     *
     * @param  int $id (required)
     * @param  \Piksel\KigoPro\Model\PutHouseRulesCommand $put_house_rules_command (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function proV1ContentPropertiesIdHouserulesPutRequest($id, $put_house_rules_command = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling proV1ContentPropertiesIdHouserulesPut'
            );
        }

        $resourcePath = '/pro/v1/content/properties/{id}/houserules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($put_house_rules_command)) {
            $_tempBody = $put_house_rules_command;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
