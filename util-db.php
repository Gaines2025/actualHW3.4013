<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'maloucre_HW3User', 'BoomerSooner!', 'maloucre_actualHW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
