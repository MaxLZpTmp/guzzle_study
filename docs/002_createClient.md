# Create Client

```php
$config = [
    // Base URI is used with relative requests
    'base_uri' => 'http://www.dynamo.kiev.ua',
    // You can set any number of default request options.
    'timeout'  => 12.0,
];
  
$guzzle = new \GuzzleHttp\Client($config);
```