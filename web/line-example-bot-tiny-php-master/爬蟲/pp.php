<script>
	//codes.js     
	var page = require("webpage").create();

	page.open("https://ebus.gov.taipei/Stop/RoutesOfStop?Stopid=2218401020", function(status) {
		// Parse contents and return result
	});
</script>
<?php
$result = shell_exec('phantomjs-master\\lib\\phantomjs.js');
include('simple_html_dom.php');

$html = file_get_html('https://ebus.gov.taipei/Stop/RoutesOfStop?Stopid=2218401020');

foreach($html->find('.auto-list-routelist-time-in') as $e)
echo $e->plaintext . '<br>';

?>