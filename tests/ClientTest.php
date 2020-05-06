<?php
/**
 * User: maxlzp
 * @link https://github.com/MaxLZp
 */

use maxlzp\guzzle_study\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    //protected $baseUri = "https://www.livejournal.com/ratings/";
    protected $baseUri = "http://www.dynamo.kiev.ua";
    /**
     * @test
     */
    public function shouldCreateClient()
    {

       $client = new Client($this->baseUri);

       $this->assertNotNull($client);
    }

    /**
     * @test
     */
    public function shouldGetResponse()
    {
        $client = new Client($this->baseUri);
        $responseContent = $client->getContentFromPath();
        $this->assertNotNull($responseContent);
        //echo $responseContent;
    }
}
