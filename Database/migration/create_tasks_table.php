<?php


use Helpers\DBConnection;

include("../../Helpers/DBConnection.php");

$conn_obj = new DBConnection();

$conn = $conn_obj->connect();

$query = "CREATE TABLE tasks(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NULL,
    description TEXT NULL,
    status INT(1) NULL,
    user_id INT(30) NULL,
    deadline TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    onupdated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

try {
    $conn->query($query);
    echo "Tasks Table Created Successfully";
} catch (PDOException $e) {
    echo "Tasks Table not Created" . $e->getMessage();
}
