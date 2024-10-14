<?php
function selectLeagues() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT league_ID, league_name, country_origin FROM league");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
