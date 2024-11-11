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

function updateLeagues($lName, $lCountry, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update league set league_name = ?, country_origin = ? where league_ID = ?");
        $stmt->bind_param("ssi", $lName, $lCountry, $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertLeagues($lName, $lCountry) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `league` (`league_name`, `country_origin`) VALUES (?, ?)");
        $stmt->bind_param("ss", $lName, $lCountry);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteLeagues($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from league where league_ID=?");
        $stmt->bind_param("i", $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
