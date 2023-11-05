<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Data</title>
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
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $totalpeople = $_POST["totalpeople"];
    $adults = $_POST["adults"];
    $childrens = $_POST["childrens"];
    $checkindate = $_POST["checkindate"];
    $checkoutdate = $_POST["checkoutdate"];
    $typeofroom = $_POST["typeofroom"];

    $sql = "INSERT INTO customer (name,email,phone,totalpeople,adults,childrens,checkindate,checkoutdate,typeofroom) VALUES ('$name', '$email','$phone', '$totalpeople','$adults','$childrens','$checkindate','$checkoutdate','$typeofroom')";

       if ($conn->query($sql) === TRUE) {
             echo "Data updated successfully.";
                             $conn->close();

                // Redirect to read_data.php
                 header("Location: book.php");
                 exit;
         } else {
             echo "Error inserting data: " . $conn->error;
         }
     } else {
         echo "Error";
     }


 $conn->close();
?>
