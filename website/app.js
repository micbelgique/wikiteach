$(document).on(
	"click",
	"a",

	function(event_page){
		event_page.preventDefault();

		location.href = $(event_page.target).attr("href");
	}
)