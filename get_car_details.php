<?php
if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Connect to the database
    $conn = new mysqli('localhost', 'username', 'password', 'car_showroom');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch car details
    $sql = "SELECT * FROM cars WHERE id=$carId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode([]);
    }

    $conn->close();
}
?>
