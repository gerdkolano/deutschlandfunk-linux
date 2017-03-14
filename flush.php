<?php

if (ob_get_level() == 0) ob_start();

for ($i = 0; $i<10; $i++){

	echo "<br> Line to show. $i.";
	  $datum = new DateTime( );
	  echo $datum->format( "Y-m-d H:i:s");

        echo str_pad('',1000)."\n";   

        ob_flush();
        flush();
        sleep(2);
}

echo "Done.";

ob_end_flush();

?>
