```php
<?php
use Thoma\MyPassword\MyUrl;

$slugify = new Slugify();

$url = new MyUrl();
echo $url->slugify("https://www.example.org", "Das ist ein langer Text");
?>
```