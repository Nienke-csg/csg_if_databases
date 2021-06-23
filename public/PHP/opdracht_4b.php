<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 123456, 'voornaam' => 'Alan', 'achternaam' => 'Turing');
$leerling=array('nr' => 150852, 'voornaam' => 'Nienke', 'achternaam' => 'Middendorp', 'geboortejaar' => '2003');
echo $leerling['voornaam']." ".$leerling['achternaam']." werd geboren in ".$leerling['geboortejaar'].".<br>"; 

echo "<pre>Leerling:";
print_r($leerling);
echo "</pre>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>