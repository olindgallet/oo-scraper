<?php
	require_once('web-scraper.php');
	
	$response = Array('status_code' => '500', 'status_message'=> 'Server error.', 'data' => '');
	try {
		$web_scraper = new WebScraper();
		$scrape_data = $web_scraper->scrape('http://www.dmoz.org');
	
		$response = Array('status_code' => '200', 'status_message' => 'OK.', 'data' => $scrape_data);
	} catch (Exception $e){
		//no error handling
	}
	echo json_encode($response);
?>