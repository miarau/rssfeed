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
	
	/*
	public function testGetConstructorProperties(){
		
		$feed = $this->getMockBuilder('CRSSFeed')
		->setMethods(array('_construct'))
		->setConstructorArgs(array('http://feeds.feedburner.com/idg/vzzs', 3600))
		->disableOriginalConstructor()
		->getMock();
	}
	
	protected function getHtml(){
		return '
             <!DOCTYPE html>
                <html lang="se">
                <head>
                    <meta name="viewport" content="width=1, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
                    <meta name="description" content="Dallas PHP/MySQL Web Developer"/>
                    <meta name="author" content="Juan Treminio"/>
                    <meta name="generator" content="PieCrust 1.0.0-dev"/>
                    <meta name="template-engine" content="Twig"/>
                    <title>Juan Treminio - Dallas PHP/MySQL Web Developer &mdash; Blog</title>
                </head>
                <body>
                </body>
                </html>
        ';
	}*/
	/** -------------------------------------------------------
     * Test 
	 * @param string $originalString incoming String
	 * @param string $expectedResult Expected result
	 *  
     */
	 
	 
	 /* These two tested from tutorial
	 public function testReturnsString($originalString, $expectedResult){
		 
		 $originalString = '<article><h1>Senaste nytt från IDG</h1></article>';
		 $expectedResult = '<article><h1>Senaste nytt från IDG</h1></article>';
		 
		 $feed = new CRSSFeed();
		 
		 $result = $feed->getFeed($originalString);
		 
		 $this->assertEquals($expectedResult, $result);
	 }
	 
	 
	  public function testReturnsEmptyString(){
		 
		 $originalString = '';
		 $expectedResult = '';
		 
		 $feed = new CRSSFeed();
		 
		 $result = $feed->getFeed($originalString);
		 
		 $this->assertEquals($expectedResult, $result);
	 }
	 */
	 
	
	/*These gives 73%coverage in total
	*
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
	
	 
	 public function testGetRSS(){
		 $rss = new SimplePie();
 		 $rss->get_items(1,1);
 		 $feed = new CRSSFeed($rss);
 		 if ($feed->getFeed()){
	 		"Expected success";
	 		 } 
	 }*/
}