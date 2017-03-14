#!/bin/bash

function hole() {
  wget -O /tmp/p$1 "http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=forschung+aktuell+komplett&drau:page=$1"
 # http://srv.deutschlandradio.de/themes/dradio/script/aod/index.html?audioMode=2&audioID=4&state=
 #                  http://srv.deutschlandradio.de/aodlistaudio.1706.de.rpc?drau:searchterm=forschung%20aktuell%20komplett&drau:page=1&drau:limit=30

}

hole 1;

exit 0

mpg123 -k30000 -v http://ondemand-mp3.dradio.de/file/dradio/2016/02/10/dlf_20160210_1635_1aff02cc.mp3

http://www.deutschlandfunk.de/suchergebnisse.448.de.html?search%5Bsubmit%5D=1&search%5BwithNews%5D%5B%5D=WithNews&search%5Bword%5D=forschung+komplett

http://www.deutschlandfunk.de/suchergebnisse.448.de.html?search%5Bsubmit%5D=1&search%5BwithNews%5D%5B%5D=WithNews&search%5Bword%5D=&search%5BresultsPerPage%5D=50&search%5BdateStart%5D=&search%5BdateEnd%5D=&search%5BbroadcastList%5D=DLF-Mathekalender

http://www.deutschlandradio.de/text-und-audio-suche.287.de.html?search%5Bsubmit%5D=1&search%5Bword%5D=forschung+aktuell+komplett

http://www.deutschlandfunk.de/dlf-audio-archiv.2386.de.html?drau%5Bsubmit%5D=1&drau%5Bsearchterm%5D=forschung+aktuell+komplett&drau%5Bfrom%5D=&drau%5Bto%5D=&drau%5Bbroadcast_id%5D=

mpg123 http://dradio_mp3_dlf_m.akacast.akamaistream.net/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m
mpg123 http://dradio_mp3_dkultur_m.akacast.akamaistream.net/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m
mpg123 http://dradio_mp3_dwissen_m.akacast.akamaistream.net/7/728/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dwissen_m

mpg123 http://stream.dradio.de/7/249/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dlf_m
mpg123 http://stream.dradio.de/7/530/142684/v1/gnl.akacast.akamaistream.net/dradio_mp3_dkultur_m

http://dradio-ogg-dlf-l.akacast.akamaistream.net/7/629/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_l
http://dradio_ogg_dlf_s.akacast.akamaistream.net/7/636/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_s
http://dradio-ogg-dlf-medium.akacast.akamaistream.net/7/359/135496/v1/gnl.akacast.akamaistream.net/dradio_ogg_dlf_medium

