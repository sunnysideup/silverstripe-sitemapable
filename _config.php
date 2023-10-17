<?php

use Sunnysideup\Sitemapable\Interfaces\SitemapableInterface;
use SilverStripe\Core\ClassInfo;
use Wilr\GoogleSitemaps\GoogleSitemap;

if(class_exists('\\Wilr\\GoogleSitemaps\\GoogleSitemap')) {
    if (0 === strpos(ltrim($_SERVER['REQUEST_URI'], '/'), 'sitemap')) {
        foreach(ClassInfo::implementorsOf(SitemapableInterface::class) as $className) {
            GoogleSitemap::register_dataobject($className, 'daily');
        }
    }
}
