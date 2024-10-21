<?php
function selectClubsInLeague($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT club_name, club_name, club_country, club_ID From Club c Where c.league_ID = ?;");
        $stmt->bind_param("i",$cid);
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
