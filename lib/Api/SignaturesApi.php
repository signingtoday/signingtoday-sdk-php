<?php
/**
 * SignaturesApi
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Signing Today API
 *
 * *Signing Today* enables seamless integration of digital signatures into any website by the use of easy requests to our API. This is the smart way of adding digital signature support with a great user experience.   *Signing Today APIs* use HTTP methods and are RESTful based, moreover they are protected by a *server to server authentication* standard by the use of tokens.   *Signing Today APIs* can be used in these environments:   | Environment | Description | Endpoint | | ----------- | ----------- | -------- | | Sandbox     | Test environment | `https://sandbox.signingtoday.com` | | Live        | Production environment | `https://api.signingtoday.com` |   For every single request to Signing Today has to be defined the following *HTTP* header: - `Authorization`, which contains the authentication token.  If the request has a body than another *HTTP* header is requested: - `Content-Type`, with `application/json` value.   Follows an example of usage to enumerate all the user of *my-org* organization.  **Example**  ```json $ curl https://sandbox.signingtoday.com/api/v1/my-org/users \\     -H 'Authorization: Token <access-token>' ```  ## HTTP methods used  APIs use the right HTTP verb in every situation.  | Method   | Description                    | | -------- | ------------------------------ | | `GET`    | Request data from a resource   | | `POST`   | Send data to create a resource | | `PUT`    | Update a resource              | | `PATCH`  | Partially update a resource    | | `DELETE` | Delete a resourse              |   ## Response definition  All the response are in JSON format. As response to a request of all users of an organization you will have a result like this:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     \"meta\": {       \"code\": 200     },     \"data\": [       {         \"id\": \"jdo\",         \"status\": \"enabled\",         \"type\": \"Basic user account\",         \"email\": johndoe@dummyemail.com,         \"first_name\": \"John\",         \"last_name\": \"Doe\",         \"wallet\": [],         \"created_by\": \"system\",         \"owner\": false,         \"automatic\": false,         \"rao\": false       },       ...     ]   } ```  The JSON of the response is made of three parts: - Pagination - Meta - Data  ### Pagination  *Pagination* object allows to split the response into parts and then to rebuild it sequentially by the use of `next` and `previous` parameters, by which you get previous and following blocks. The *Pagination* is present only if the response is a list of objects.  The general structure of *Pagination* object is the following:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     ...   } ```  ### Meta  *Meta* object is used to enrich the information about the response. In the previous example, a successful case of response, *Meta* will have value `status: 2XX`. In case of unsuccessful response, *Meta* will have further information, as follows:  ```json {     \"meta\": {       \"code\": <HTTP STATUS CODE>,       \"error_type\": <STATUS CODE DESCRIPTION>,       \"error_message\": <ERROR DESCRIPTION>     }   } ```  ### Data  *Data* object outputs as object or list of them. Contains the expected data as requested to the API.  ## Search filters  Search filters of the API have the following structure:  `where_ATTRIBUTENAME`=`VALUE`  In this way you make a case-sensitive search of *VALUE*. You can extend it through the Django lookup, obtaining more specific filters. For example:  `where_ATTRIBUTENAME__LOOKUP`=`VALUE`  where *LOOKUP* can be replaced with `icontains` to have a partial insensitive research, where  `where_first_name__icontains`=`CHa`  matches with every user that have the *cha* string in their name, with no differences between capital and lower cases.  [Here](https://docs.djangoproject.com/en/1.11/ref/models/querysets/#field-lookups) the list of the lookups.  ## Webhooks  Signing Today supports webhooks for the update of DSTs and identities status. You can choose if to use or not webhooks and if you want to receive updates about DSTs and/or identities. You can configurate it on application token level, in the *webhook* field, as follows:  ```json \"webhooks\": {   \"dst\": \"URL\",   \"identity\": \"URL\"   } ```  ### DSTs status update  DSTs send the following status updates: - **DST_STATUS_CHANGED**: whenever the DST changes its status - **SIGNATURE_STATUS_CHANGED**: whenever one of the signatures changes its status  #### DST_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"DST_STATUS_CHANGED\",     \"data\": {       \"status\": \"<DST_STATUS>\",       \"dst\": \"<DST_ID>\",       \"reason\": \"<DST_REASON>\"     }   } ```  #### SIGNATURE_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"SIGNATURE_STATUS_CHANGED\",     \"data\": {       \"status\": \"<SIGNATURE_STATUS>\",       \"group\": <MEMBERSHIP_GROUP_INDEX>,       \"dst\": {         \"id\": \"<DST_ID>\",         \"title\": \"<DST_TITLE>\"       },       \"signature\": \"<SIGNATURE_ID>\",       \"signer\": \"<SIGNER_USERNAME>\",       \"position\": \"<SIGNATURE_POSITION>\",       \"document\": {         \"display_name\": \"<DOCUMENT_TITLE>\",         \"id\": \"<DOCUMENT_ID>\",         \"order\": <DOCUMENT_INDEX>       },       \"automatic\": <DECLARES_IF_THE_SIGNER_IS_AUTOMATIC>,       \"page\": \"<SIGNATURE_PAGE>\"     }   } ```  ### Identities status update  Identities send the following status updates: - **IDENTITY_REQUEST_ENROLLED**: whenever an identity request is activated  #### IDENTITY_REQUEST_ENROLLED  Sends the following information:  ```json {     \"message\": \"IDENTITY_REQUEST_ENROLLED\",     \"data\": {       \"status\": \"<REQUEST_STATUS>\",       \"request\": \"<REQUEST_ID>\",       \"user\": \"<APPLICANT_USERNAME>\"     }   } ```  ### Urlback  Sometimes may be necessary to make a redirect after an user, from the signature tray, has completed his operations or activated a certificate.  If set, redirects could happen in 3 cases: - after a signature or decline - after a DST has been signed by all the signers or canceled - after the activation of a certificate  In the first two cases the urlback returns the following information through a data form: - **dst-id**: id of the DST - **dst-url**: signature_ticket of the signature - **dst-status**: current status of the DST - **dst-signature-id**: id of the signature - **dst-signature-status**: current status of the signature - **user**: username of the signer - **decline-reason**: in case of a refused DST contains the reason of the decline  In the last case the urlback returns the following information through a data form: - **user**: username of the user activated the certificate - **identity-provider**: the provider has been used to issue the certificate - **identity-request-id**: id of the enrollment request - **identity-id**: id of the new identity - **identity-label**: the label assigned to the identity - **identity-certificate**: public key of the certificate  ## SUPPORTED Provider  The supported providers are:   - *_aruba_*   - *infocert*   - *namirial*   - *uanataca*
 *
 * The version of the OpenAPI document: 1.5.0
 * Contact: smartcloud@bit4id.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * SignaturesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignaturesApi
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
     * Operation createChannel
     *
     * Create a channel
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $dst_id The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse2014|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404
     */
    public function createChannel($organization_id, $dst_id)
    {
        list($response) = $this->createChannelWithHttpInfo($organization_id, $dst_id);
        return $response;
    }

    /**
     * Operation createChannelWithHttpInfo
     *
     * Create a channel
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $dst_id The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse2014|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404, HTTP status code, HTTP response headers (array of strings)
     */
    public function createChannelWithHttpInfo($organization_id, $dst_id)
    {
        $request = $this->createChannelRequest($organization_id, $dst_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                case 201:
                    if ('\OpenAPI\Client\Model\InlineResponse2014' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse2014', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse2014';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse2014',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createChannelAsync
     *
     * Create a channel
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $dst_id The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChannelAsync($organization_id, $dst_id)
    {
        return $this->createChannelAsyncWithHttpInfo($organization_id, $dst_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createChannelAsyncWithHttpInfo
     *
     * Create a channel
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $dst_id The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChannelAsyncWithHttpInfo($organization_id, $dst_id)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse2014';
        $request = $this->createChannelRequest($organization_id, $dst_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'createChannel'
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $dst_id The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createChannelRequest($organization_id, $dst_id)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling createChannel'
            );
        }
        // verify the required parameter 'dst_id' is set
        if ($dst_id === null || (is_array($dst_id) && count($dst_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dst_id when calling createChannel'
            );
        }

        $resourcePath = '/{organization-id}/channels/{dst-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organization-id' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($dst_id !== null) {
            $resourcePath = str_replace(
                '{' . 'dst-id' . '}',
                ObjectSerializer::toPathValue($dst_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation declineDST
     *
     * Decline a Digital Signature Transaction
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject5 $inline_object5 inline_object5 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse2013|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse404
     */
    public function declineDST($organization_id, $signature_id, $inline_object5)
    {
        list($response) = $this->declineDSTWithHttpInfo($organization_id, $signature_id, $inline_object5);
        return $response;
    }

    /**
     * Operation declineDSTWithHttpInfo
     *
     * Decline a Digital Signature Transaction
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject5 $inline_object5 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse2013|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse404, HTTP status code, HTTP response headers (array of strings)
     */
    public function declineDSTWithHttpInfo($organization_id, $signature_id, $inline_object5)
    {
        $request = $this->declineDSTRequest($organization_id, $signature_id, $inline_object5);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                case 200:
                    if ('\OpenAPI\Client\Model\InlineResponse2013' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse2013', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse2013';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse2013',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation declineDSTAsync
     *
     * Decline a Digital Signature Transaction
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject5 $inline_object5 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function declineDSTAsync($organization_id, $signature_id, $inline_object5)
    {
        return $this->declineDSTAsyncWithHttpInfo($organization_id, $signature_id, $inline_object5)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation declineDSTAsyncWithHttpInfo
     *
     * Decline a Digital Signature Transaction
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject5 $inline_object5 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function declineDSTAsyncWithHttpInfo($organization_id, $signature_id, $inline_object5)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse2013';
        $request = $this->declineDSTRequest($organization_id, $signature_id, $inline_object5);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'declineDST'
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject5 $inline_object5 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function declineDSTRequest($organization_id, $signature_id, $inline_object5)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling declineDST'
            );
        }
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null || (is_array($signature_id) && count($signature_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_id when calling declineDST'
            );
        }
        // verify the required parameter 'inline_object5' is set
        if ($inline_object5 === null || (is_array($inline_object5) && count($inline_object5) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inline_object5 when calling declineDST'
            );
        }

        $resourcePath = '/{organization-id}/signatures/{signature-id}/decline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organization-id' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signature-id' . '}',
                ObjectSerializer::toPathValue($signature_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($inline_object5)) {
            $_tempBody = $inline_object5;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation performDST
     *
     * Sign a DST with an automatic signer
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\AutomaticSignature $automatic_signature Automatic Signature description (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse20011|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404
     */
    public function performDST($organization_id, $signature_id, $automatic_signature)
    {
        list($response) = $this->performDSTWithHttpInfo($organization_id, $signature_id, $automatic_signature);
        return $response;
    }

    /**
     * Operation performDSTWithHttpInfo
     *
     * Sign a DST with an automatic signer
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\AutomaticSignature $automatic_signature Automatic Signature description (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse20011|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404, HTTP status code, HTTP response headers (array of strings)
     */
    public function performDSTWithHttpInfo($organization_id, $signature_id, $automatic_signature)
    {
        $request = $this->performDSTRequest($organization_id, $signature_id, $automatic_signature);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                case 200:
                    if ('\OpenAPI\Client\Model\InlineResponse20011' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse20011', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse20011';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse20011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation performDSTAsync
     *
     * Sign a DST with an automatic signer
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\AutomaticSignature $automatic_signature Automatic Signature description (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performDSTAsync($organization_id, $signature_id, $automatic_signature)
    {
        return $this->performDSTAsyncWithHttpInfo($organization_id, $signature_id, $automatic_signature)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation performDSTAsyncWithHttpInfo
     *
     * Sign a DST with an automatic signer
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\AutomaticSignature $automatic_signature Automatic Signature description (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performDSTAsyncWithHttpInfo($organization_id, $signature_id, $automatic_signature)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse20011';
        $request = $this->performDSTRequest($organization_id, $signature_id, $automatic_signature);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'performDST'
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\AutomaticSignature $automatic_signature Automatic Signature description (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function performDSTRequest($organization_id, $signature_id, $automatic_signature)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling performDST'
            );
        }
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null || (is_array($signature_id) && count($signature_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_id when calling performDST'
            );
        }
        // verify the required parameter 'automatic_signature' is set
        if ($automatic_signature === null || (is_array($automatic_signature) && count($automatic_signature) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $automatic_signature when calling performDST'
            );
        }

        $resourcePath = '/{organization-id}/signatures/{signature-id}/perform';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organization-id' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signature-id' . '}',
                ObjectSerializer::toPathValue($signature_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($automatic_signature)) {
            $_tempBody = $automatic_signature;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation performSignature
     *
     * Perform a Signature
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\Id $identity_id The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity (required)
     * @param  \OpenAPI\Client\Model\InlineObject3 $inline_object3 inline_object3 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse20012|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404
     */
    public function performSignature($organization_id, $signature_id, $identity_id, $inline_object3)
    {
        list($response) = $this->performSignatureWithHttpInfo($organization_id, $signature_id, $identity_id, $inline_object3);
        return $response;
    }

    /**
     * Operation performSignatureWithHttpInfo
     *
     * Perform a Signature
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\Id $identity_id The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity (required)
     * @param  \OpenAPI\Client\Model\InlineObject3 $inline_object3 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse20012|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404, HTTP status code, HTTP response headers (array of strings)
     */
    public function performSignatureWithHttpInfo($organization_id, $signature_id, $identity_id, $inline_object3)
    {
        $request = $this->performSignatureRequest($organization_id, $signature_id, $identity_id, $inline_object3);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                case 200:
                    if ('\OpenAPI\Client\Model\InlineResponse20012' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse20012', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse20012';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse20012',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation performSignatureAsync
     *
     * Perform a Signature
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\Id $identity_id The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity (required)
     * @param  \OpenAPI\Client\Model\InlineObject3 $inline_object3 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performSignatureAsync($organization_id, $signature_id, $identity_id, $inline_object3)
    {
        return $this->performSignatureAsyncWithHttpInfo($organization_id, $signature_id, $identity_id, $inline_object3)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation performSignatureAsyncWithHttpInfo
     *
     * Perform a Signature
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\Id $identity_id The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity (required)
     * @param  \OpenAPI\Client\Model\InlineObject3 $inline_object3 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performSignatureAsyncWithHttpInfo($organization_id, $signature_id, $identity_id, $inline_object3)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse20012';
        $request = $this->performSignatureRequest($organization_id, $signature_id, $identity_id, $inline_object3);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'performSignature'
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\Id $identity_id The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity (required)
     * @param  \OpenAPI\Client\Model\InlineObject3 $inline_object3 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function performSignatureRequest($organization_id, $signature_id, $identity_id, $inline_object3)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling performSignature'
            );
        }
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null || (is_array($signature_id) && count($signature_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_id when calling performSignature'
            );
        }
        // verify the required parameter 'identity_id' is set
        if ($identity_id === null || (is_array($identity_id) && count($identity_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $identity_id when calling performSignature'
            );
        }
        // verify the required parameter 'inline_object3' is set
        if ($inline_object3 === null || (is_array($inline_object3) && count($inline_object3) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inline_object3 when calling performSignature'
            );
        }

        $resourcePath = '/{organization-id}/signatures/{signature-id}/perform/{identity-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organization-id' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signature-id' . '}',
                ObjectSerializer::toPathValue($signature_id),
                $resourcePath
            );
        }
        // path params
        if ($identity_id !== null) {
            $resourcePath = str_replace(
                '{' . 'identity-id' . '}',
                ObjectSerializer::toPathValue($identity_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($inline_object3)) {
            $_tempBody = $inline_object3;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation performSignatureWithSession
     *
     * Perform a Signature with session
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject4 $inline_object4 inline_object4 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse20013|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404
     */
    public function performSignatureWithSession($organization_id, $signature_id, $inline_object4)
    {
        list($response) = $this->performSignatureWithSessionWithHttpInfo($organization_id, $signature_id, $inline_object4);
        return $response;
    }

    /**
     * Operation performSignatureWithSessionWithHttpInfo
     *
     * Perform a Signature with session
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject4 $inline_object4 (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse20013|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse401|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404, HTTP status code, HTTP response headers (array of strings)
     */
    public function performSignatureWithSessionWithHttpInfo($organization_id, $signature_id, $inline_object4)
    {
        $request = $this->performSignatureWithSessionRequest($organization_id, $signature_id, $inline_object4);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
                case 200:
                    if ('\OpenAPI\Client\Model\InlineResponse20013' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse20013', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\InlineResponse401' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse401', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse20013';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse20013',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation performSignatureWithSessionAsync
     *
     * Perform a Signature with session
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject4 $inline_object4 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performSignatureWithSessionAsync($organization_id, $signature_id, $inline_object4)
    {
        return $this->performSignatureWithSessionAsyncWithHttpInfo($organization_id, $signature_id, $inline_object4)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation performSignatureWithSessionAsyncWithHttpInfo
     *
     * Perform a Signature with session
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject4 $inline_object4 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function performSignatureWithSessionAsyncWithHttpInfo($organization_id, $signature_id, $inline_object4)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse20013';
        $request = $this->performSignatureWithSessionRequest($organization_id, $signature_id, $inline_object4);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'performSignatureWithSession'
     *
     * @param  string $organization_id The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization (required)
     * @param  \OpenAPI\Client\Model\Id $signature_id The **signature-id** is the uuid code that identifies a signature that has to be performed into a digital signature transaction. It is usually used in the API endpoints to perform, decline or cancel a digital signature transaction (required)
     * @param  \OpenAPI\Client\Model\InlineObject4 $inline_object4 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function performSignatureWithSessionRequest($organization_id, $signature_id, $inline_object4)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling performSignatureWithSession'
            );
        }
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null || (is_array($signature_id) && count($signature_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature_id when calling performSignatureWithSession'
            );
        }
        // verify the required parameter 'inline_object4' is set
        if ($inline_object4 === null || (is_array($inline_object4) && count($inline_object4) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inline_object4 when calling performSignatureWithSession'
            );
        }

        $resourcePath = '/{organization-id}/signatures/{signature-id}/session-perform';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organization-id' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signature-id' . '}',
                ObjectSerializer::toPathValue($signature_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($inline_object4)) {
            $_tempBody = $inline_object4;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'POST',
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
