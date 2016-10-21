<?php
/**
 * A test class for testing RSSFeed class
 * 
 */

namespace Miax\RSSFeed;
use SimplePie;
use Miax\RSSFeed\CRSSFeed;
require_once(__DIR__."/../../src/RSSFeed/simplepie/simplepie_1.3.1.mini.php");

      
class CRSSFeedTest extends \PHPUnit_Framework_TestCase {
	
	
	/** -------------------------------------------------------
     * Test 
	 *  
     */
	 
	 
	 private $feed;
	 
	
	 public function setUp(){
		$rss = new SimplePie();
		$rss->get_items(1,1);
	  	$this->feed = new CRSSFeed($rss);
	 }
	 
	 
	 public function testAssertTags(){		
		$matcher = array(
		'tag' => 'h1', 'content' => 'regexp:/<h1>.*<\/h1>/',
		'parent' => array('tag' => 'article')
		);
		 
		$matchFeed = array(
		  'tag'=> 'h2', 'content' => 'regexp:/<h2>.*<\/h2>/',
		  'tag'=> 'small', 'content' => 'regexp:/<small>.*<\/small>/',
		  'tag'=> 'p', 'content' => 'regexp:/<p>.*<\/p>/',
		  'parent' => array('tag' => 'div', 'attributes' => array('class' => 'feed-content'))
		);	
	 }
	 
	 
	 public function testGetFeed(){
		$this->assertInternalType('string', 'regexp:/<article>.*<\/article>/');
	 }
}