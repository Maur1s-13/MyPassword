<?php

namespace Thoma\MyPassword;

use Cocur\Slugify\Slugify;

class MyUrl 
{
    function slugify($url, $link)
    {
        $slugify = new Slugify();

        return $url . "/" . $slugify->slugify($link);
    }
}