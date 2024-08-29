<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sale_entry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['phone_no'])) {
    $phone_no = $_POST['phone_no'];

    // Query the database to check if the phone number exists
    $query = "SELECT * FROM closer_sale_entry WHERE phone_no = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $phone_no);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Phone number exists, return data as JSON
        $data = $result->fetch_assoc();
        echo json_encode(["status" => "success", "data" => $data]);
    } else {
        // Phone number does not exist, return an error
        echo json_encode(["status" => "error", "message" => "Phone number not found."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Phone number is required."]);
}
?>
