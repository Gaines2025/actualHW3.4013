<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_ID, player_name, player_league, player_country, player_age from Player");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayers($pName, $pCountry, $pAge, $pLeague, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update Player set player_name = ?, player_country = ?, player_age = ?, player_league = ? where player_ID = ?");
        $stmt->bind_param("ssisi", $pName, $pCountry, $pAge, $pLeague, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayers($pName, $pCountry, $pAge, $pLeague) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Player` ('player_name', 'player_country', 'player_age', 'player_league') VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $pName, $pCountry, $pAge, $pLeague);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayers($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Player where player_ID=?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
