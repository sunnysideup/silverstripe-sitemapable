<?php

use Sunnysideup\Sitemapable\Interfaces\SitemapableInterface;
use SilverStripe\Core\ClassInfo;
use Wilr\GoogleSitemaps\GoogleSitemap;

if(class_exists(GoogleSitemap::class) && isset($_SERVER['REQUEST_URI'])) {
    if (str_starts_with(ltrim((string) $_SERVER['REQUEST_URI'], '/'), 'sitemap')) {
        foreach(ClassInfo::implementorsOf(SitemapableInterface::class) as $className) {
            GoogleSitemap::register_dataobject($className, 'daily');
        }
    }
}
