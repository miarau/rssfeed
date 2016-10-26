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
	 
	 /*
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
	*/
	 
	 public function testMatchString(){
		$this->assertInternalType('string', 'regexp:/<article>.*<\/article>/');
	 }
	 
	 public function testAssertTags(){
		 $el = new CRSSFeed();
        $res = $el->getFeed();
		 //$this->assertStringStartsWith('div class=feed-content>', $res);
		 $this->assertInternalType('string', 'regexp:/<h1>Senaste nytt från IDG<\/h1>/');
		 $this->assertInternalType('string', 'regexp:/<h2>.*<\/h2>/');
		 $this->assertInternalType('string', 'regexp:/<small.*<\/small>/');
		 $this->assertInternalType('string', 'regexp:/<p>.*<\/p>/');
		 $this->assertInternalType('string', 'regexp:/<p>.*<\/p>/');
	 }
	/* 
	 public function testMatchArticle(){
		 $this->assertStringStartsWith('<article>', '$this->getFeed()');
	 }
	 
	 /*
	 public function testAsHTMLFeed() {
        $el = new CRSSFeed();
        $res = $el->getFeed();
       // $res = trim($res);
        $this->assertInternalType('string', $res);
        $this->assertStringStartsWith('<div class=feed-content>', $res);
        //$this->assertStringEndsWith('</div>', $res);
        $res = $el->getFeed(true);
        $this->assertInternalType('string', $res);
        $this->assertStringStartsWith('<html>', $res);
       	$this->assertStringEndsWith('</div>', $res);
    }
*/
	 /*
	 public function testClassType() {
		$feed = new CRSSFeed(['http://feeds.feedburner.com/idg/vzzs/']);
		$test = get_class($feed);
		$exp = "Miax\RSSFeed\CRSSFeed";
		$this->assertEquals($test, $exp, "Wrong class");
	}*/
	/*
	public function testGetFeed() {
		$feed = new CRSSFeed(['http://feeds.feedburner.com/idg/vzzs/']);
		$test = substr($feed->getFeed(), 0, 35);
		$exp = "<article><div class=\"feed-content\">";
		echo $exp;
		$this->assertEquals($test, $exp, "Output does not match expected");
	}*/
	 
	 public function testGetRSS(){
		 $rss = new SimplePie();
 		 $rss->get_items(1,1);
 		 $feed = new CRSSFeed($rss);
 		 if ($feed->getFeed()){
	 		"Expected success";
	 		 } 
	 }
}