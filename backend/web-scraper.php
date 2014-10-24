<?php

require_once('id-name-conditional.php');
require_once('has-anchor-text-conditional.php');

/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A WebScraper scrapes a given URL, searching for data that matches provided conditionals.
 */
class WebScraper{
    public function __construct(){
	}
	
	private function crawl_with_curl($url){
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
	
	public function scrape($url){
		$doc      = new DOMDocument();
		$items    = $doc->getElementsByTagname('div');
		$response = Array();
		
		$idNameConditional        = new IdNameConditional('catalogs');
		$hasAnchorTextConditional = new HasAnchorTextConditional('game');
	
		libxml_use_internal_errors(true);
		$doc->loadHTML($this->crawl_with_curl($url));
		libxml_clear_errors();
			
		foreach($items as $item){
			if ($idNameConditional->accept($item)){
				$links = $item->getElementsByTagname('a');
				foreach($links as $link){
					if ($link->hasAttribute('href') && $hasAnchorTextConditional->accept($link)){
						array_push($response, $link->getAttribute('href'));
					}
				}
			}
		}
		
		return $response;
	}
}
?>