<?php
$page=1;
$url = "http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=forschung+aktuell+komplett&drau:page=$page";
echo $url."<br />";

$entries = new SimpleXMLElement(file_get_contents($url));

echo $entries->attributes()->page . "/" . $entries->attributes()->pages . "<br />";

foreach($entries as $item) {
	echo $item->attributes()->i . " "
		. $item->attributes()->id . " " 
		. $item->attributes()->url . " "
	       	. "item<br />";
}
$n = count($item);
echo "item hat $n Elemente.<br>";

foreach($entries as $a=>$b) {
  echo "a$a b$b ww  $b->title <br />\n";
};


// pre tags to format nicely
echo '<pre>';
print_r($entries);
echo '</pre>';

$entriesDoc = new DOMDocument();
$entriesDoc->load( $url);

$x = $entriesDoc->documentElement;
foreach ($x->childNodes AS $item) {
	  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}

echo "gelesen: <br />\n";
echo readfile( $url);
echo "<br />\n";

$response_xml_data = file_get_contents($url);
if ($response_xml_data) {
  echo "gelesen: <br />\n";
  echo "$response_xml_data <br />\n";
}

// read feed into SimpleXML object
$sxml = simplexml_load_file($url);
/*
// then you can do
var_dump($sxml);
*/

?> 
