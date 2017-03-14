<?php
function dauer() {
}

$page=1;
$url = "http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=forschung+aktuell+komplett&drau:page=$page";
echo $url."<br />";

$entries = new SimpleXMLElement(file_get_contents($url));

$n = count($entries->attributes());
echo "entries hat $n Attribute.<br>";

echo "<strong>A005 Einige Attribute</strong><br />\n";
echo "Seite " . $entries->attributes()->page
	. " von " . $entries->attributes()->pages
       	. "<br />";
echo "<strong>A010 Alle Attribute ohne Namen</strong><br />\n";
foreach($entries->attributes() as $einattr) {
  echo $einattr . "<br />";
}
echo "<br>";

echo "<strong>A020 Alle Attribute mit Namen</strong><br />\n";
foreach($entries->attributes() as $a=>$b) {
  echo "$a=\"$b\"<br />\n";
}
echo "<br>";

foreach($entries as $item) {
echo "<strong>A030 Einige Attribute</strong><br />\n";
  echo $item->attributes()->timestamp . " "
     . $item->attributes()->duration . " " 
     . $item->attributes()->url . " "
     . $item->attributes()->id . " " 
     . $item->title . " " 
     . "<br />";
echo "<strong>A033 Alle Attribute ohne Namen</strong><br />\n";
  foreach($item->attributes() as $einattr) {
    echo $einattr . "<br />";
  }
echo "<strong>A036 Alle Attribute mit Namen</strong><br />\n";
  foreach($item->attributes() as $a=>$b) {
    echo "$a=\"$b\"<br />\n";
  }
  echo "<br>";
}


$n = count($item->attributes());
echo "<strong>A070 Anzahl der Attribute</strong><br />\n";
echo "item hat $n Attribute.<br>";

$n = count($item);
echo "<strong>A080 Anzahl der Elemente</strong><br />\n";
echo "item hat $n Elemente.<br>";

echo "<strong>A090 Ein Attribut</strong><br />\n";
foreach($entries as $a=>$b) {
  echo "a=$a b=$b title=$b->title <br />\n";
};

echo "<br />\n";
echo "<strong>A100 Objekt in PHP-Syntax</strong>";
// pre tags to format nicely
echo '<pre>';
print_r($entries);
echo '</pre>';

?> 
