<?php
class thema {
  var $suchwort;
  function __construct( $wort) {
    $this->suchwort = $wort;
  }

function dauer( $secs) {
  return sprintf( "%02d:%02d", floor( $secs/60), $secs%60);
}

function datum( $secs) {
  $datum = new DateTime( "@" . (3600 + $secs));
  return $datum->format( "Y-m-d H:i:s");
}
  
function eineSeite( $suchwort, $page) {
  $url = "http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=$suchwort&drau:page=$page";
  echo $url."<br />\n";
  $entries = new SimpleXMLElement(file_get_contents($url));
  
  echo "Seite " . $entries->attributes()->page
  	. " von " . $entries->attributes()->pages
	. "<br />\n";
  $seitenanzahl = $entries->attributes()->pages;
  
  foreach($entries as $item) {
    $datum = new DateTime( "@" . (3600+$item->attributes()->timestamp));
    // , new DateTimeZone('Europe/Berlin'));
    echo ""
       . $this->dauer( $item->attributes()->duration) . " " 
       . $this->datum( $item->attributes()->timestamp) . " "
       . "<a href=\"" . $item->attributes()->url . "\"> "
       . $item->title . " " 
       . "</a>\n"
       . $item->attributes()->id . " " 
       . "<br />\n";
  }
  echo str_pad('',4096)."\n";    
  ob_flush();
  flush();

  return $seitenanzahl;
}
   
  function zeige() {
     for ($i=1; $i<$this->eineSeite( $this->suchwort, $i); $i++);
  }
}
ob_start();
echo "http://gerd.dyndns.za.net/erprobe/deutschlandfunk/simplexml.php?name=Forschung+aktuell+komplett" . "<br /\n";
echo htmlspecialchars($_GET["name"]) ."<br />\n";
$name = urlencode( $_GET["name"]);
echo str_pad('',4096)."\n";    
ob_flush();
flush();

// $einThema = new thema( "forschung+aktuell+komplett");
$einThema = new thema( $name);
$einThema->zeige();
ob_end_flush(); 
?> 
