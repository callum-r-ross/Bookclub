<?php
// Start session
session_start();

// Call function with cookies for user access level
displayAccessLevelInformation($_COOKIE['user_access']);

// Create function for checking user level
function displayAccessLevelInformation ($user_access){
    if($user_access == "standard_access"){
        echo "<p>You have standard access to this site</p>";
    }
    elseif($user_access == "root"){
        echo "<p>You have full access to this site</p>";
        echo "<p>You have been giving site admin control</p>";
    }
}
?>