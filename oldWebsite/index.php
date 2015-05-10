<?php header( 'Location: /div/' ) ; ?>
<?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/browser.php');
        $br = new Browser;        
        //echo "$br->Platform, $br->Name version $br->Version";

		if ( "$br->Name" == "MSIE" ) {
			if ( "$br->Version" == "6.0") {
				header( 'Location: http://beijinginn.dastudio.co.uk/table/' ) ;
			} else {
				header( 'Location: http://beijinginn.dastudio.co.uk/div/' ) ;
			}
		}

?>