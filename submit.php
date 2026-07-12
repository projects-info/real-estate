<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO enquiries(name, email, phone, message)
            VALUES('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Enquiry Submitted Successfully!');
                window.location='index.html';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>