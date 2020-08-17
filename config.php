<?php 
define("DEVELOPMENT", true);

ini_set("display_errors", DEVELOPMENT);

// > Set database stuff here when / if needed

define("CLASS_PATH", "classes");
define("TEMPLATES", "templates");
define("DATA_STORE", "data");

function handleException( $exception ) {
    echo "Sorry, a problem has occurred.\nPlease try again later or contact a website administrator.";
    error_log($exception->getMessage());
}
