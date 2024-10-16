<?php
function selectPlayersOnClubs($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_name, player_country, player_age, player_league, player_ID From Player p Where p.club_ID = ?;");
        $stmt->bind_param("i",$lid);
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
