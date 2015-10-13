<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("../src/CRSSFeed.php");

//change this path to your desired path
$rssFeed = new Miax\RSSFeed\CRSSFeed(['http://feeds.feedburner.com/idg/vzzs/']);
echo $rssFeed->getFeed();