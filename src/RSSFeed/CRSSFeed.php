<?php
/**
 * A factory wrapper for creating  objects of external RSS libs.
 * 
 */

namespace Miax\RSSFeed;
//use Exception;
use SimplePie;

//change the cache directory to wherever you want it
define('CACHE', __DIR__.'/../webroot/cache/');
require_once(__DIR__."/simplepie/simplepie_1.3.1.mini.php");

class CRSSFeed {
  
  // constructor - initialize SimplePie.
  public function __construct($feedArr, $duration = 3600) {
      $this->object = new SimplePie();
      $this->object->set_cache_location(CACHE);
      $this->object->set_cache_duration($duration);
      $this->object->set_feed_url($feedArr);
      $this->object->init();
  }

  // return content. 
  public function getFeed() {
      $feedItems = $this->object->get_items();
      $html = "<article>";
	  $html .= "<h1>Senaste nytt från IDG</h1>"; //change this to your own headline
      foreach($feedItems as $content) {
          $html .= "<div class='feed-content'>";
		  $html .= "<h2>" . $content->get_title() . "</h2>" ;
		  $html .= "<small>Postad ". $content->get_date('Y-m-d | H:i:s')."</small>";
          $html .= "<p>" . $content->get_content() . "</p>";
          $html .= "<p><a href=" . $content->get_permalink() . ">Läs mer</a>";
          $html .= "</div>";
      }
      $html .= "</article>";
          return $html;
  }
} 
/*
$feed = new SimplePie();
$flow = new CRSSFeed($feed,3600);
if ($flow->getFeed('http://feeds.feedburner.com/idg/vzzs/', 3600)){
	print "OK";
	
	 echo var_dump($html); 
}*/

	//$rssFeed = new Miax\RSSFeed\CRSSFeed(['http://feeds.feedburner.com/idg/vzzs']);
    //$content = $rssFeed->getFeed();