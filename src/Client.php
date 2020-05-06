<?php
/**
 * User: maxlzp
 * @link https://github.com/MaxLZp
 */

namespace maxlzp\guzzle_study;

/**
 * Class Client
 * @package maxlzp\guzzle_study
 */
class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * Client constructor.
     */
    public function __construct(string $baseUri, float $timeout = 5)
    {
        $config = [
            // Base URI is used with relative requests
            'base_uri' => $baseUri,
            // You can set any number of default request options.
            'timeout'  => $timeout,
        ];
        $this->guzzle = new \GuzzleHttp\Client($config);
    }

    /**
     * @param string $path
     * @return string
     */
    public function getContentFromPath(string $path = ''): string
    {
        $response = $this->guzzle->get($path);
        $responseBody = $response->getBody();
        return $responseBody->getContents();
    }
}