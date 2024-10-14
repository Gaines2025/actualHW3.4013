<?php
function selectPlayersOnClubs($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.club_ID, club_name, club_city, club_country FROM Club c join Player p on c.club_ID = p.club_ID where p.club_ID = ?");
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
