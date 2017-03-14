<?php
function makeXML() {

$xmlString = <<<XML
<entries>
    <johndoe>
        <pref color="#FFFFFF" nocheins="NochN"/>
        <pref size="14"/>
        <pref font="Verdana"/>
    </johndoe>
    <janedoe>
        <pref color="#000000"/>
        <pref size="16"/>
        <pref font="Georgia"/>
        <pref vier="Viertes"/>
    </janedoe>   
</entries>
XML;

return simplexml_load_string($xmlString);

}
function readPrefs($user, $xml) {
  foreach($xml as $item) {echo $item->pref[0]->attributes() . "zz ";};
  foreach($xml as $a=>$b) {echo "a$a b$b ww ";};
  echo"<br />\n";
  echo "aa " . $xml->$user->pref[0]->attributes() . " aa<br />\n"; 
    foreach($xml->$user as $arr) {echo "xy ";};
        $n = count($arr);
           
    for($i=0;$i<$n;$i++) {
        foreach($xml->$user->pref[$i]->attributes() as $a=>$b) {
            $prefs[$a] = (string)$b;
            echo "$user $i $n $a $b <br />\n";
        }
    }
       
    print_r($prefs); echo"<br />\n";
}

readPrefs('johndoe', makeXML());
readPrefs('janedoe', makeXML());

?>
