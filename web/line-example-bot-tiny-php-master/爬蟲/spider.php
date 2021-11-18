<?php
//先把外掛載進來simple_html_dom.php
require_once('simple_html_dom.php');


//讀取網頁資料HTML
$url = 'https://ebus.gov.taipei/';
$html = file_get_html($url);

foreach($html->find('article[class="fast-search-c ui-widget"] label[class="label-radio label-fast-search-radio"]') as $input) {
	echo $input->plaintext.'<br />';
}

$url = 'https://ebus.gov.taipei/Stop/RoutesOfStop?Stopid=2218401020';
$html = file_get_html($url);

foreach($html->find('span[class="auto-list auto-list-routelist"]') as $busdetail) {
	echo $busdetail->plaintext.'<br />';
}

$url = 'https://ebus.gov.taipei/EBus/VsSimpleMap?routeid=0100000100&amp;gb=0';
$html = file_get_html($url);

foreach($html->find('div[class="map_stops"]') as $busdetail) {
	echo $busdetail->plaintext.'<br />';
}
$data=json_decode($html);
print_r( $data);
?>
