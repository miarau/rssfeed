<?php
/**
 * A test class for testing RSSFeed class
 * 
 */

namespace Miax\RSSFeed;
use SimplePie;
define('CACHE', __DIR__.'/../webroot/cache/');
require_once(__DIR__."/simplepie/simplepie_1.3.1.mini.php");

      
class CRSSFeedTest extends \PHPUnit_Framework_TestCase {
	
	
	/** -------------------------------------------------------
     * Test 1
	 *  
     */ 
	/*public function testGetFeed(){
		$feed = new \Miax\RSSFeed\CRSSFeed('test');
		$res = $el['name'];
		$exp = 'test';
		$this->assertEquals($res, $exp, "Created element name missmatch.");
	}
	
	*/
	
	/** ---------------------------------------------------------
     * Test 2 Mock of SimplePie  
     * 
     */ 
	 
	//private $rss;

  
	/*public function setUp(){
		$feed = new SimplePie();
		$feed = getFeed('http://feeds.feedburner.com/idg/vzzs/');
		$rss = new Miax\RSSFeed\CRSSFeed($feed);
		
	}
	
	public function tearDown(){
		
	}
	
	public function testCorrectFeed() {
        $this->assertTrue(
            $this->rss->getFeed('http://feeds.feedburner.com/idg/vzzs/'),
            "Expecting successful result"
            ); echo setVerboseErrorHandler();
			
    }
	
	public function testFalseFeed(){
		$feed = $this->getMock("SimplePie");
		$this->rss = new Miax\RSSFeed\CRSSFeed($feed);
			 ->method('get_items')
			 ->with($this->equalTo('/../webroot/cache/','http://feeds.feedburner.com/idg/vzzs/', 3600));
		
		$feed->expects($this->once())
			 ->method('getTitle')
			 ->with($this->equalTo('Senaste nytt från IDG'));
			 
		
		$feed->expects($this->once())
		$this->rss->getFeed("http://feeds.feedburner.com/idg/vzzs/", "wrong");
	}
	*/
	
	/** ---------------------------------------------------------
     * Test 3  
     * 
     */ 
	
	/*protected function setVerboseErrorHandler(){
		$handler = function($errorNumber, $errorString, $errorFile, $errorLine) {
			echo "
			ERROR INFO
			Message: $errorString
			File: $errorFile
			Line: $errorLine
			";
		};
		set_error_handler($handler);        
	}*/
	
	/* public function testGetFeed() { 
		 $feed = new Miax\RSSFeed\CRSSFeed(['http://feeds.feedburner.com/idg/vzzs/']); 
		 $content = $this->feed->getFeed(); 
		 $this->assertEqual($feed, $content, "Return type is not a valid type"); 
		// echo setVerboseErrorHandler();
  	}*/
  
	
	/** ---------------------------------------------------------
     * Test test  
     * 
     */ 
	
	
	public function testTesting() {
    $this->assertEquals(1, 1, "Just making sure this is being checked.");
 	}
	 
}