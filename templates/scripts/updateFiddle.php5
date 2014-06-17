// Creating the User's Macro File
// Gets the Session ID 
$sessionID = $SOSE->ENV("SESSIONID");
$networkPath = '\\\\sxatl\\tc1\\sites\\TC1\\SWdev.TC1.dc.publicus.com\\templates\\objects\\fiddles\\';
$userFile = $networkPath . $sessionID . ".pbo" ;
$handle = fopen($userFile, 'w') or die('Cannot open file:  '. $userFile); //implicitly creates file


//Appending Code to the User's File 
$userData = $SOSE->GetVar("objectscript");
fwrite($handle, $userData);

fclose($handle);



