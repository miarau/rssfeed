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
	
	public function testClass() {
        $rss = new CRSSFeed(['http://feeds.feedburner.com/idg/vzzs']);
		$test = get_class($rss);
		$exp = "Miax\RSSFeed\CRSSFeed";
		$this->assertEquals($test, $exp, "Wrong class");
	}
    
	public function testRssFeed() {
        $rss = new CRSSFeed(['http://feeds.feedburner.com/idg/vzzs']);
		$test = $rss->getFeed();
		$this->assertStringEndsWith('</article>', $test);
	}
}