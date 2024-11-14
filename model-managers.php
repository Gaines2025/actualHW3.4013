<?php
function selectManagers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT manager_ID, manager_age, manager_country, manager_club, manager_name from Manager");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateManagers($mName, $mCountry, $mClub, $mAge, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Manager SET manager_name = ?, manager_age = ?, manager_club = ?, manager_country = ? where manager_ID = ?");
        $stmt->bind_param("sssii", $mName, $mCountry, $mClub, $mAge, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertManagers($mName, $mCountry, $mClub, $mAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO Manager ('manager_ID', 'manager_name', 'manager_age', 'manager_club', 'manager_country') VALUES (NULL, ?, ?, ?, ?)");
        $stmt->bind_param("sssi", $cName, $cCity, $cCountry, $mAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteManagers($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Club where manager_ID=?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
