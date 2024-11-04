<?php
function selectClubs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT club_ID, club_name, club_city, club_country FROM Club");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateClubs($cName, $cCity, $cCountry, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Club` set `club_name` = ?, `club_city` = ?, `club_country` = ?, where 'club_id' = ?");
        $stmt->bind_param("sssi", $cName, $cCity, $cCountry, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertClubs($cName, $cCity, $cCountry) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Club` (`club_name`, `club_city`, `club_country`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cCity, $cCountry);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteClubs($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Club where club_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
