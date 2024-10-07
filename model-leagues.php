<?php
function selectLeagues() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("");
        $stmt->bind_param("s", $uEmail);
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
