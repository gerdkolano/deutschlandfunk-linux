<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="favicon-196x196.png" rel="shortcut icon">
<title>DLF</title>
</head>
<body>

<pre>
ogg-Streams  Firefox spielt sie

<a href="http://poznan5-4.radio.pionier.net.pl:8000/tuba10-1.mp3" target="_blank">http://poznan5-4.radio.pionier.net.pl:8000/tuba10-1.mp3</a>
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
	"Das war der Tag komplett",
	"Das war der Tag",
	"Forschung aktuell komplett",
	"Forschung aktuell",
	"Wissenschaft im Brennpunkt",
	"Kultur heute komplett",
	"Kultur heute",
	"Computer und Kommunikation komplett",
	"Markt und Medien komplett",
	"Polen",
	"polnisch",
	"kaczynski",
	"",
	"",
	"",
	""
      );

/*
 * Alle mit "T" beginnenden Zeilen zwischen den Zeilenanfängen
 * C S19.2E-1-1079-28013 DLF
 * und dem nächsten c
 * in /var/cache/vdr/epg.data 
 */

$lista = Array (
  "Am Sonntagmorgen",
  "Andruck - Das Magazin für Politische Literatur",
  "Atelier neuer Musik",
  "Aus Kultur- und Sozialwissenschaften",
  "Aus Religion und Gesellschaft",
  "Büchermarkt",
  "Campus & Karriere komplett",
  "Computer und Kommunikation komplett",
  "Corso - Kultur nach 3",
  "Das Feature",
  "Das war der Tag",
  "Das Wochenendjournal",
  "Deutschlandfunk Radionacht",
  "Deutschland heute",
  "Die neue Platte",
  "DLF-Magazin",
  "Dossier",
  "Eine Welt",
  "Essay und Diskurs",
  "Europa heute",
  "Forschung aktuell komplett",
  "Freistil",
  "Geistliche Musik",
  "Gesichter Europas",
  "Gottesdienst",
  "Hintergrund",
  "Historische Aufnahmen",
  "Hörspiel",
  "Informationen am Abend",
  "Informationen am Mittag",
  "Informationen am Morgen",
  "Information und Musik",
  "Interview der Woche",
  "JazzFacts",
  "Jazz Live",
  "Kalenderblatt",
  "Klassik-Pop-et cetera",
  "Kommentar",
  "Kontrovers",
  "Konzertdokument der Woche",
  "Koran erklärt",
  "Kulturfragen",
  "Kultur heute",
  "Länderzeit",
  "Lange Nacht",
  "Lebenszeit",
  "Lesezeit",
  "Lied- und Folkgeschichte(n)",
  "Markt und Medien komplett",
  "Mediasres komplett",
  "Mitternachtskrimi",
  "Musikforum",
  "Musikjournal",
  "Musik-Panorama",
  "Musikszene",
  "Nachrichten",
  "National- und Europahymne",
  "On Stage",
  "Presseschau",
  "Querköpfe",
  "Rock et cetera",
  "Schalom",
  "Sonntagsspaziergang",
  "Sport aktuell",
  "Sport am Samstag",
  "Sport am Sonntag",
  "Sportgespräch",
  "Sprechstunde",
  "Tag für Tag komplett",
  "Themen der Woche",
  "Umwelt und Verbraucher",
  "Wirtschaft am Mittag",
  "Wirtschaft und Gesellschaft",
  "Wissenschaft im Brennpunkt",
  "Zur Diskussion",
  "Zwischentöne",
	""
);

function zeige( $host, $suchwort) {
echo "<a href=\"http://$host/erprobe/deutschlandfunk/simplexml.php?name="
	. urlencode( $suchwort)
	. "\" target=\"_blank\">$suchwort</a>\n"
	. "<br />\n"
	;
}

function ein_host ( $host, $liste) {
  echo "<h2>$host</h2>";
  foreach ($liste as $element) {
    zeige( $host, $element);
  }
}

echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
ein_host( "franzimint", $lista);
ein_host( "zoe.xeo", $liste);
ein_host( "zoe.xeo", $lista);
ein_host( "192.168.2.11", $liste);
ein_host( "gerd.dyndns.za.net", $liste);
ein_host( "gerd.dyndns.za.net:8080", $lista);

$host = "192.168.2.11";
echo "<h2>$host</h2>";
//echo $liste[1] ."<br />\n";

foreach ($liste as $element) {
	zeige( "192.168.2.11", $element);
}

?>


