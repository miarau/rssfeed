[![Build Status](https://travis-ci.org/miarau/rssfeed.svg?branch=master)](https://travis-ci.org/miarau/rssfeed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miarau/rssfeed/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miarau/rssfeed/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/miarau/rssfeed/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miarau/rssfeed/?branch=master)

CRSSFeed
=========
PHP module class to get content of one or more RSS feeds. This repository also contains SimplePie. 




Installation
------------

To implement crssfeed on your site, get a copy of this repository using git clone or download it to your desktop.

Make sure you have a path for the cache available at the defined location, if you do not want the feed to download new information on each request. Using a cache is better for your system performance. You can adjust this path in the module file, CRSSFeed.php.

Initialize a new instance of the module, sending in a adress to a RSS-feed to the constructor, and a duration for the cache if you like.

Next, echo the method getFeed() on the object to display the feed.

Example:

$feed = new CRSSFeed(  
    [  
        "http://addresstofeed.com/rss",  
        "http://addresstoanotherfeed.com/rss"  
    ]  
);  
echo $feed->getFeed();


  

Licence
-------

This software is free software and carries a MIT license. Any included external modules are subject to their own licensing.




History
-------

v0.1.0 (first version)

Base functionality.




Copyright (c) Mia Raunegger, 2015, mia@design4u2.se