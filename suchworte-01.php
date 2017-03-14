<!doctype html>
<html>
<head>
<title>fr suche
</title>
</head>

<body>
<pre>
ogg-Streams  Firefox spielt sie

<a href="http://www.deutschlandradiokultur.de/programmvorschau.282.de.html" target="_blank">http://www.deutschlandradiokultur.de/programmvorschau.282.de.html</a>

<a href="http://dradio_mp3_dokdeb_s.akacast.akamaistream.net/7/725/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dokdeb_s" target="_blank">http://dradio_mp3_dokdeb_s.akacast.akamaistream.net/7/725/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dokdeb_s</a>

<a href="http://olsztyn.radio.pionier.net.pl:8000/z/radiotok4.ogg" target="_blank">http://olsztyn.radio.pionier.net.pl:8000/z/radiotok4.ogg</a>

<a href="http://dradio-ogg-dlf-l.akacast.akamaistream.net/7/629/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_l" target="_blank">http://dradio-ogg-dlf-l.akacast.akamaistream.net/7/629/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_l</a>
<a href="http://dradio_ogg_dlf_s.akacast.akamaistream.net/7/636/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_s" target="_blank">http://dradio_ogg_dlf_s.akacast.akamaistream.net/7/636/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_s</a>
<a href="http://dradio-ogg-dlf-medium.akacast.akamaistream.net/7/359/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_medium" target="_blank">http://dradio-ogg-dlf-medium.akacast.akamaistream.net/7/359/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_medium</a>

mp3-Streams  Firefox spielt sie nicht

<audio src="http://dradio_mp3_dlf_m.akacast.akamaistream.net/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m">DLF</audio>
<a href="http://dradio_mp3_dlf_m.akacast.akamaistream.net/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m" target="_blank">http://dradio_mp3_dlf_m.akacast.akamaistream.net/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m</a>
<a href="http://dradio_mp3_dkultur_m.akacast.akamaistream.net/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m" target="_blank">http://dradio_mp3_dkultur_m.akacast.akamaistream.net/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m</a>
<a href="http://dradio_mp3_dwissen_m.akacast.akamaistream.net/7/728/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dwissen_m" target="_blank">http://dradio_mp3_dwissen_m.akacast.akamaistream.net/7/728/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dwissen_m</a>
<a href="http://stream.dradio.de/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m" target="_blank">http://stream.dradio.de/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m</a>
<a href="http://stream.dradio.de/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m" target="_blank">http://stream.dradio.de/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m</a>
</pre>

<?php

$liste = Array (
        "",
        "Computer und Kommunikation",
        "Computer und Kommunikation komplett",
        "Das war der Tag",
        "Das war der Tag komplett",
        "Europa heute",
        "Europa heute Sendung",
        "Forschung aktuell",
        "Forschung aktuell komplett",
        "Gesichter Europas",
        "Hintergrund",
        "Informationen am Abend",
        "Informationen am Abend komplett",
        "Informationen am Abend komplett",
        "kaczynski",
        "Kultur heute",
        "Kultur heute komplett",
        "Marktplatz komplett",
        "Markt und Medien",
        "Markt und Medien komplett",
        "Polen",
        "polnisch",
        "Tag für Tag",
        "wirtschaft und gesellschaft komplett",
        "Wissenschaft im Brennpunkt",
        "zeitfragen",
	"",
	""
);

function zeige( $host, $suchwort) {
echo "<a href=\"http://$host/erprobe/deutschlandfunk/simplexml.php?name="
	. urlencode( $suchwort)
	. "\" target=\"_blank\">$suchwort</a>\n"
	. "<br />\n"
	;
}

$host = "franzimint";
echo "<h2>$host</h2>";

//echo $liste[1] ."<br />\n";
foreach ($liste as $element) {
	zeige( $host, $element);
}

$host = "gerd.dyndns.za.net";
echo "<h2>$host</h2>";

//echo $liste[1] ."<br />\n";
foreach ($liste as $element) {
	zeige( "gerd.dyndns.za.net", $element);
}


$host = "192.168.2.11";
echo "<h2>$host</h2>";
//echo $liste[1] ."<br />\n";

foreach ($liste as $element) {
	zeige( "192.168.2.11", $element);
}
# http://dradio_mp3_dokdeb_s.akacast.akamaistream.net/7/725/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dokdeb_s

?>


