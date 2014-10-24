var WEB_SERVICE_URL = "backend/scraper-service.php";

function call_scraper(){
	$.ajax({
			type: "POST",
			url: WEB_SERVICE_URL,
			success: function(data)
		{
			var response       = $.parseJSON(data);
			var status_code    = response['status_code'];
			var status_message = response['status_message'];
			var data           = response['data'];
			var i              = 0;
			var list           = "<ul>";
			
			while (i < data.length){
				list = list + "<li>" + data[i] + "</li>";
				i = i + 1;
			}
			
			list = list + "</ul>";
			$('#scrape-contents').html(list);			
		}
	});
}

call_scraper();