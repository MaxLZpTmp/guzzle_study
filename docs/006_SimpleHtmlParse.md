# Simple html-parsing

```php

use PhpQuery\PhpQuery;
  
$phpQuery = new PhpQuery();
$phpQuery->load_str($html);
$post = $phpQuery->query('.head-champ a .post-name');
  
foreach ($posts as $post) {
    echo \trim($post->textContent) . "\n";
}
```