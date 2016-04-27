<?php
/**
 * A test class for testing RSSFeed class
 * 
 */

namespace Miax\RSSFeed;
use SimplePie;

//change the cache directory to wherever you want it
//define('CACHE', __DIR__.'/../webroot/cache/');

//require_once(__DIR__.'/../simplepie/simplepie_1.3.1.mini.php');
//require_once(__DIR__.'/../CRSSFeed.php');

class CRSSFeedTest extends \PHPUnit_Framework_TestCase {
   
   private $feed;
   
   public function testTesting() {
    $this->assertEquals(1, 2, "Just making sure this is being checked.");
  }
   
   /*public function setUp(){
	   $this->feed = new \Miax\RSSFeed\CRSSFeed(['http://feeds.feedburner.com/idg/vzzs']);
	   $test = get_items($this->feed);
	   $exp = "\Miax\RSSFeed\CRSSFeed";
	   $this->assertEquals($test, $exp, "Wrong items");
   }*/
   
  /**
     * Test 
     *
     * @return void
     *
     */
  public function testGetFeed() {
    $this->feed = new \Miax\RSSFeed\CRSSFeed(['http://feeds.feedburner.com/idg/vzzs']);
	   $content = $this->feed->getFeed();
	   $this->assertInternalType('string', $content, "Return type is not a string");
  } 
} 