<?php

function getPlats($conn) {
    $sql = "SELECT * FROM Plats";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function deletePlat($conn, $id) {
    $sql = "DELETE FROM Plats WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute() === TRUE) {
        return true;
    } else {
        return false;
    }
}

function updatePlat($conn, $id, $nom, $description, $prix) {
    $sql = "UPDATE Plats SET nom=?, description=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nom, $description, $prix, $id);
    if ($stmt->execute() === TRUE) {
        return true;
    } else {
        return false;
    }
}

function ajouterPlat($conn, $plat_type, $plat_desc, $created_by) {
    $sql = "INSERT INTO Plats (Plat_type, Plat_desc, Created_by) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $plat_type, $plat_desc, $created_by);
    if ($stmt->execute() === TRUE) {
        return true;
    } else {
        return false;
    }
}

?>