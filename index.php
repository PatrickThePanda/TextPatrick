<?php
include_once "clockwork-php-master/class-Clockwork.php";

$key = "bb90f967264b04a2c9700f4135fee8cdcbbba16e";

// Create a Clockwork object using your API key
$clockwork = new Clockwork( $key );
  
// Setup and send a message
$message = array( "to" => "447850527324", "message" => "Hello Patrick" );
$result = $clockwork->send( $message );
  
// Check if the send was successful
if( $result["success"] ) {
    echo "Message sent - ID: " . $result["id"];
} else {
    echo "Message failed - Error: " . $result["error_message"];
}