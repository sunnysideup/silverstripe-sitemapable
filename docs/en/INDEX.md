Add the following interface to any `DataObject` you want to include in the sitemap.

```php
use Sunnysideup\Sitemapable\Interfaces\SitemapableInterface;

class MyDataObject extends DataObject implements SitemapableInterface
{
    // ...
}
```

And they should be added to your sitemap.xml

The interface requires the DataObject to have a `Link` method and an `AbsoluteLink` method.
