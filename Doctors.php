<?php
// Define database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";

//Create connection
$conn = new mysqli('localhost','root','','appointment' /*$servername, $username, $password, $database*/);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $address = $_POST['address'];
    $disease = $_POST['Select_disease'];
    $doctor = $_POST['Select_doctor'];
    $date = $_POST['date'];
    $time = $_POST['Select_time'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO booking (name, email, phone, address, Select_disease, Select_doctor, date, Select_time, message) VALUES ('$name', '$email', '$mobile', '$address', '$disease', '$doctor', '$date', '$time' ,'$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>