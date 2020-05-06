# Get response
   
```php
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
```