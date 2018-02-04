<?php namespace WhatCMS;

use GuzzleHttp\Client;

/**
 * Base class for WhatCMS API wrapper
 */
class WhatCMS
{
    
    /**
     * Your WhatCMS API key.
     *
     * @var string
     */
	protected $key;
    
    /**
     * WhatCMS API endpoint.
     *
     * @var string
     */
	protected $endpoint = 'https://whatcms.org/APIEndpoint';
    
    /**
     * HTTP client instance.
     *
     * @var Client
     */    
    protected $client;

	/**
	 * Create a new WhatCMS instance.
	 *
     * @param string $key Your API key
	 */
	public function __construct(string $key)
    {
		$this->key    = $key;
        $this->client = new Client();
	}

	/**
	 * Check for a CMS at the given URL.
	 * If the API request fails, guzzle may throw an exception.
	 *
     * @see                  https://whatcms.org
	 * @param  string $url   The url you would like to check for a CMS.
	 * @param  bool   $array Whether or not to return the result as an associative array or object.
	 * @return mixed         NULL if the json response cannot be decoded.
	 */
	public function detect($url, $array = true)
    {
		$query = http_build_query(
            array(
                'key' => $this->key,
                'url' => $url
            ),
            null,
            '&',
            PHP_QUERY_RFC3986
        );

		$response = $this->client->request('GET', "{$this->endpoint}?{$query}");
		$content  = $response->getBody()->__toString();

		return json_decode($content, $array);
	}

}
