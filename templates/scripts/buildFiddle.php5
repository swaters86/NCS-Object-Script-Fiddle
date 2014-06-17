//This could probably be made into a global function... 
$sessionID = $SOSE->ENV("SESSIONID");
$networkPath = '\\\\sxatl\\tc1\\sites\\TC1\\SWdev.TC1.dc.publicus.com\\templates\\objects\\fiddles\\';
$userFile = $networkPath . $sessionID . ".pbo" ;

if(!file_exists($userFile)) {

	$SOSE->Echo("");

} else {

	// Try dipslaying the user's fiddle
	try {

	// Locate the object for the fiddle
	$userFiddle = $SOSE->LocateObject('/Fiddles/' . $sessionID);

	// Display Contents From Fiddle
	$SOSE->Echo($SOSE->PBOScript($userFiddle)); 

	} catch (Exception $e) {

		$SOSE->Echo("<p class='alert'>Oh no, something went wrong! You should check your input!</p>");

	}
  
}



