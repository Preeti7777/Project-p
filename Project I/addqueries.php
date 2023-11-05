<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Queries</title>
    <!-- Include the styles.css file -->
   
</head>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sarowar";

// Create a connection to the existing database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data and sanitize inputs
    $name = $_POST["name"];
    $phone=$_POST["phone"];
    $email = $_POST["email"];
    $message=$_POST["message"];

    $sql = "INSERT INTO queries (name,phone,email,message) VALUES ('$name', '$phone','$email','$message')";

       if ($conn->query($sql) === TRUE) {
             echo "Data updated successfully.";
                             $conn->close();

                // Redirect to read_data.php
                 header("Location: contact.php");
                 exit;
         } else {
             echo "Error inserting data: " . $conn->error;
         }
     } else {
         echo "Error";
     }


 $conn->close();
?>