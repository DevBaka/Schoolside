<?php
	
    switch($section)
    {
	case "Home":
            include("templates/Start.php");
            break;
	case "Ampel":
            include("templates/ampel.php");
            break;
        case "Impressum":
            include("templates/Impressum.php");
            break;
        default:
            include("templates/Start.php");
            break;
			
    }


?>
