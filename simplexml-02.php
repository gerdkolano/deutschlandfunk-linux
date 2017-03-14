<?php
function dauer( $secs) {
  return floor( $secs/60) . ":" . $secs%60;
}

function datum( $secs) {
  $datum = new DateTime( "@" . (3600 + $secs));
  return $datum->format( "Y-m-d H:i:s");
}

$page=1;
$url = "http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=forschung+aktuell+komplett&drau:page=$page";
echo $url."<br />";

$entries = new SimpleXMLElement(file_get_contents($url));

echo "Seite " . $entries->attributes()->page
	. " von " . $entries->attributes()->pages
       	. "<br />";

foreach($entries as $item) {
  $datum = new DateTime( "@" . (3600+$item->attributes()->timestamp));
  // , new DateTimeZone('Europe/Berlin'));
  echo ""
     . $item->title . " " 
     . datum( $item->attributes()->timestamp) . " "
     . dauer( $item->attributes()->duration) . " " 
     . $item->attributes()->url . " "
     . $item->attributes()->id . " " 
     . "<br />";
  foreach($item->attributes() as $a=>$b) {
    echo "$a=\"$b\"<br />\n";
  }
  echo "<br>";
}

?> 
