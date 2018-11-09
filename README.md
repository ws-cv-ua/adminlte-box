Installation
-
To install, run
```
$ composer require ws-cv-ua/adminlte-box
```

Usage
-
```php
use \wscvua\adminltebox\BoxWidget'
 
BoxWidget::begin([
    'title' => 'Some title text',
    'type' => BoxWidget::TYPE_PRIMARY
]);
echo $someContent;
BoxWidget::end();
```